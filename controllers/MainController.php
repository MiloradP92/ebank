<?php

	namespace App\Controllers;

	use App\Core\DatabaseConnection;
	use App\Models\RacunModel;
	use App\Models\KorisnikModel;
	use App\Core\Controller;

	class MainController extends Controller
	{
		public function getLogin()
		{
		}
		
		public function postLogin()
		{
			$username = \filter_input(INPUT_POST, 'login_email', FILTER_SANITIZE_STRING);
			$password = \filter_input(INPUT_POST, 'login_password', FILTER_SANITIZE_STRING);
			
			$validator = new \App\Validators\StringValidator();
			
			$validanPassword = $validator->setMinLength(7)->setMaxLength(120)->isValid($password);
				
			if (!$validanPassword)
			{				
				$this->set('message', 'Doslo je do greske: Lozinka nije ispravnog formata');
				return;
			}

			$userModel = new \App\Models\KorisnikModel($this->getDatabaseConnection());
	
			$user = $userModel->getByFieldName('email', $username);		
			
			if (!$user) {
				$this->set('message', 'Doslo je do greske! Ne postoji korisnik sa ovim username-om');
				return;
			}
			
			$passwordHash = $user->password_hash;
			
			if (!password_verify($password, $passwordHash))
			{
				sleep(1);
				$this->set('message', 'Doslo je do greske! Lozinka nije ispravna.');
				return;				
			}			
			
			$this->getSession()->put('user_id', $user->id);
			$this->getSession()->save();
			
			$this->redirect('/ebank_app');
		}
		
	}