<?php
	
	namespace App\Controllers;	
	
	use App\Core\DatabaseConnection;
	use App\Models\RacunModel;
	use App\Models\KorisnikModel;
	use App\Core\Controller;
	
	class HomeController extends \App\Core\Role\UserRoleController
	{
		public function index()
		{
			$userId = $this->getSession()->get('user_id', null);
			$racunModel = new RacunModel($this->getDatabaseConnection());
			$stanje = $racunModel->izracunajStanjePoRacunu($racunModel->getDefaultAccountId($userId));
			$transakcije = $racunModel->getTransactionsByAccountId($racunModel->getDefaultAccountId($userId));

			$userModel = new KorisnikModel($this->getDatabaseConnection());
			$user = $userModel->getById($userId);
			$osnovniRacun = $racunModel->getById($racunModel->getDefaultAccountId($userId));

			$this->set('stanje', $stanje);
			$this->set('transakcije', $transakcije);
			$this->set('user', $user);
			$this->set('osnovniracun', $osnovniRacun->broj_racuna);
		}
			
	}