<?php

	namespace App\Controllers;

	use App\Core\DatabaseConnection;
	use App\Models\RacunModel;
	use App\Models\KorisnikModel;
	use App\Core\Controller;

	class RacunController extends Controller
	{
		public function listaRacuna()
		{
			$userId = $this->getSession()->get('user_id', null);

			$racunModel = new RacunModel($this->getDatabaseConnection());
			$racuni = $racunModel->getAllById($userId);

			$transakcije = $racunModel->getTransactionsByAccountId($racunModel->getDefaultAccountId($userId));	

			$userModel = new KorisnikModel($this->getDatabaseConnection());
			$user = $userModel->getById($userId);
			$osnovniRacun = $racunModel->getById($racunModel->getDefaultAccountId($userId));

			$this->set('racuni', $racuni);
			$this->set('stanje', $racunModel->izracunajStanjePoRacunu($racunModel->getDefaultAccountId($userId)));
			$this->set('transakcije', $transakcije);
			$this->set('user', $user);
			$this->set('osnovniracun', $osnovniRacun->broj_racuna);
		}

		public function prenos()
		{
			$userId = $this->getSession()->get('user_id', null);
			
			$racunModel = new RacunModel($this->getDatabaseConnection());
			$racuni = $racunModel->getAllById($userId);
			$arhiva = $racunModel->getTransferArchive($userId);

			$userModel = new KorisnikModel($this->getDatabaseConnection());
			$user = $userModel->getById($userId);
			$osnovniRacun = $racunModel->getById($racunModel->getDefaultAccountId($userId));
			
			$this->set('racuni', $racuni);
			$this->set('arhiva', $arhiva);
			$this->set('user', $user);
			$this->set('osnovniracun', $osnovniRacun->broj_racuna);
		}

		public function zapocniPrenos()
		{
			$userId = $this->getSession()->get('user_id', null);
			
			$target_racun = filter_input(INPUT_POST, 'target_racun', FILTER_SANITIZE_NUMBER_INT);
	        $dest_racun = filter_input(INPUT_POST, 'dest_racun', FILTER_SANITIZE_NUMBER_INT);
			$suma = filter_input(INPUT_POST, 'suma', FILTER_SANITIZE_NUMBER_FLOAT);

			try
			{
				$racunModel = new RacunModel($this->getDatabaseConnection());
				$userModel = new KorisnikModel($this->getDatabaseConnection());
				$user = $userModel->getById($userId);
				$osnovniRacun = $racunModel->getById($racunModel->getDefaultAccountId($userId));
				$this->set('user', $user);
				$this->set('osnovniracun', $osnovniRacun->broj_racuna);

				$racunModel->izvrsiPrenos($target_racun, $dest_racun, $suma);
			}
			catch (\Exception $ex)
			{
				$this->set('message', 'Prenos neuspesan!');
				return;			
			}

			$this->set('message', 'Prenos uspesan!');
			return;			
		}
	}