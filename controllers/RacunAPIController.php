<?php

	namespace App\Controllers;

	use App\Core\APIController;
	use App\Models\RacunModel;

	class RacunAPIController extends APIController
	{
		public function preuzmiInfoORacunu(int $id)
		{
			$racunModel = new RacunModel($this->getDatabaseConnection());
			$info = $racunModel->getInfoById($id);
			$this->set('racun', $info);
			$this->set('stanje', $racunModel->izracunajStanjePoRacunu($id));
		}

		public function preuzmiInfoOTransakcijama(int $idRacuna)
		{
			$racunModel = new RacunModel($this->getDatabaseConnection());
			$info = $racunModel->getTransactionsByAccountId($idRacuna);
			$this->set('transakcije', $info);
		}
	}