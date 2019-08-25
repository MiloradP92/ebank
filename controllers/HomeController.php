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
			$racunModel = new RacunModel($this->getDatabaseConnection());
			$stanje = $racunModel->izracunajStanjePoRacunu($racunModel->getDefaultAccountId(1));
			$transakcije = $racunModel->getTransactionsByAccountId($racunModel->getDefaultAccountId(1));

			$userModel = new KorisnikModel($this->getDatabaseConnection());
			$user = $userModel->getById(1);
			$osnovniRacun = $racunModel->getById($racunModel->getDefaultAccountId(1));

			$this->set('stanje', $stanje);
			$this->set('transakcije', $transakcije);
			$this->set('user', $user);
			$this->set('osnovniracun', $osnovniRacun->broj_racuna);
		}
			
	}