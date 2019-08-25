<?php

	namespace App\Core;
	
	use App\Core\Session\Session;

	class Controller
	{
		private $dbc;
		private $session;
		private $data = [];
		
		public function __pre()
		{			
		
		}
		
		final public function __construct(DatabaseConnection &$dbc)
		{
			$this->dbc = $dbc;
		}

		final public function &getDatabaseConnection()
		{
			return $this->dbc;
		}

		final public function &getSession()
		{
			return $this->session;
		}

		final public function setSession(Session $session)
		{
			$this->session = $session;
		}

		final public function set(string $name, $value)
		{
			$result = false;

			if (preg_match('/^[a-z][a-z0-9]+(?:[A-Z][a-z0-9]+)*$/', $name)) 
			{
				$this->data[$name] = $value;
				$result = true;
			}

			return $result;
		}

		final public function getData() : array
		{
			return $this->data;
		}
		
		final protected function redirect(string $path, int $code = 307)
		{
			ob_clean();
			header('Location: ' . $path, true, $code);
			exit;
		}
	}