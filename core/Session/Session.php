<?php

	namespace App\Core\Session;
	
	use App\Core\Fingerprint\FingerprintProvider;

	final class Session
	{
		private $sessionStorage;
		private $sessionData;
		private $sessionId;
		private $sessionLife;
		private $fingerprintProvider;

		public function __construct(SessionStorage $sessionStorage, int $sessionLife = 1800)
		{
			$this->fingerprintProvider = null;

			$this->storage = $sessionStorage;
			$this->data = (object) [];

			$sessionId = filter_input(INPUT_COOKIE, 'APPSESSION', FILTER_SANITIZE_STRING);
			$sessionId = \preg_replace('|[^A-z0-9]|', '', $sessionId);

			if (\strlen($sessionId) !== 32) {
				$sessionId = $this->generateSessionId();
			}

			$this->id = $sessionId;

			setcookie('APPSESSION', $this->id, time()+24*60*60, '/');
		}

		public function setFingerprintProvider(FingerprintProvider $fp)
		{
			$this->fingerprintProvider = $fp;
		}

		private function generateSessionId()
		{
			$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        
			$id = '';
			for ($i=0; $i<32; $i++) {
				$id .= $characters[rand(0, strlen($characters)-1)];
			}

			return $id;
		}

		public function put(string $key, $value)
		{
			$this->sessionData->$key = $value;
		}

		public function get(string $key, $defaultValue = null)
		{
			return $this->sessionData->$key ?? $defaultValue;
		}

		public function clear()
		{
			$this->sessionData = (object)[];
		}

		public function exists(string $key)
		{
			return isset($this->sessionData->$key);
		}

		public function has(string $key)
		{
			if (!$this->exists($key))
				return false;

			return \boolval($this->sessionData->$key);
		}

		public function save()
		{
			$fingerprint = $this->fingerprintProvider->provideFingerprint();
			$this->sessionData->__fingerprint = $fingerprint;

			$jsonData = \json_encode($this->sessionData);
			$this->SessionStorage->save($this->sessionId, $jsonData);
			setcookie('APPSESSION', $this->sessionId, time() * $this->sessionLife);
		}

		public function reload()
		{
			$jsonData = $this->SessionStorage->load($this->sessionId);
			$restoredData = \json_decode($jsonData);

			if (!restoredData)
			{
				$this->sessionData = (object) [];
				return;
			}

			$this->sessionData = $restoredData;

			if ($this->fingerprintProvider === null)
				return;

			$savedFingerprint = $this->sessionData->__fingerprint ?? null;

			if ($savedFingerprint == null)
				return;
		
			$currentFingerprint = $this->fingerprintProvider->provideFingerprint();

			if ($currentFingerprint !== $savedFingerprint)
			{
				$this->clear();
			}

		}

		public function regenerate()
		{
			$this->reload();

			$this->SessionStorage->delete($this->sessionId);
			$this->sessionId = $this->generateSessionId();
			$this->save();
			setcookie('APPSESSION', $this->sessionId, time() * $this->sessionLife);
		}
	}