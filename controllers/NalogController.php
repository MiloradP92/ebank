<?php
	
	namespace App\Controllers;

	use App\Core\DatabaseConnection;
	use App\Models\RacunModel;
	use App\Models\KorisnikModel;
	use App\Core\Controller;	
	
	class NalogController extends \App\Core\Role\UserRoleController
	{
		public function index()
		{
			$racunModel = new RacunModel($this->getDatabaseConnection());
			$userModel = new KorisnikModel($this->getDatabaseConnection());

			$user = $userModel->getById(1);
			$osnovniRacun = $racunModel->getById($racunModel->getDefaultAccountId(1));

			$this->set('user', $user);
			$this->set('osnovniracun', $osnovniRacun->broj_racuna);
		}			
	}