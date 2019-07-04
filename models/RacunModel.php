<?php

	namespace App\Models;

	use App\Core\DatabaseConnection;

	class RacunModel
	{
		private $dbc;

		public function __construct(DatabaseConnection &$dbc)
		{
			$this->dbc = $dbc;
		}

		public function getById(int $idRacuna)
		{
			$sql = 'SELECT * FROM racun WHERE id = ?;';

			$prep = $this->dbc->getConnection()->prepare($sql);
			$res = $prep->execute([$idRacuna]);
			$user = NULL;

			if ($res)
			{
				$user = $prep->fetch(\PDO::FETCH_OBJ);
			}

			return $user;
		}

		public function getAllById(int $korisnickiId): array
		{
			$sql = 'SELECT r.id as id_racuna, r.broj_racuna as broj_racuna, tr.opis as tip_racuna, v.opis as valuta_racuna, r.datum_kreacije as datum_kreacije
					FROM racun r JOIN tip_racuna tr ON r.tip_racuna = tr.id
					JOIN valuta v ON r.valuta_racuna = v.id WHERE r.korisnicki_id = 1';
			
			$prep = $this->dbc->getConnection()->prepare($sql);

			$res = $prep->execute();
			$racuni = [];

			if ($res)
			{
				$racuni = $prep->fetchAll(\PDO::FETCH_OBJ);
			}

			return $racuni;
		}

		public function getInfoById(int $id)
		{
			$sql = 'SELECT r.broj_racuna as broj_racuna, tr.opis as tip_racuna, v.opis as valuta_racuna, r.datum_kreacije as datum_kreacije
					FROM racun r JOIN tip_racuna tr ON r.tip_racuna = tr.id JOIN valuta v ON r.valuta_racuna = v.id WHERE r.id = ?';

			$prep = $this->dbc->getConnection()->prepare($sql);
			$res = $prep->execute([$id]);

			$info = [];

			if ($res)
			{
				$info = $prep->fetch(\PDO::FETCH_OBJ);
			}

			return $info;
		}

		public function getTransactionsByAccountId(int $id)
		{
			$sql = 'SELECT * FROM transakcije WHERE id_racuna = ?';

			$prep = $this->dbc->getConnection()->prepare($sql);
			$res = $prep->execute([$id]);

			$info = [];

			if ($res)
			{
				$info = $prep->fetchAll(\PDO::FETCH_OBJ);
			}

			return $info;
			
		}

		public function getDefaultAccountId(int $korisnickiId)
		{
			$sql = 'SELECT id FROM racun WHERE korisnicki_id = ? and tip_racuna = 1 order by id limit 1';
			
			$prep = $this->dbc->getConnection()->prepare($sql);
			$res = $prep->execute([$korisnickiId]);

			$info = [];

			if ($res)
			{
				$info = $prep->fetch(\PDO::FETCH_OBJ);
			}		

			return $info->id;
		}

		public function izvrsiPrenos(int $targetRacun, int $destRacun, float $suma)
		{
			if ($targetRacun == $destRacun)
				throw new \Exception("Losi podaci!");

			if ($suma <= 0)
				throw new \Exception("Losi podaci!");
			
			if ($this->izracunajStanjePoRacunu($targetRacun) < $suma)
				throw new \Exception("Nema dovoljno sredstava na racunu!");

			$sredstvaPoRacunu = $this->izracunajStanjePoRacunu($targetRacun);
			$valutaRacuna = $this->odrediValutuZaRacun($targetRacun);
			$kursZaValutu = $this->izracunajKursZaValutu($valutaRacuna);
			$sumaUDinarima = $suma * $kursZaValutu;
			$valutaDestRacuna = $this->odrediValutuZaRacun($destRacun);
			$kursZaDestValutu = $this->izracunajKursZaValutu($valutaDestRacuna);
			$finalnaDestVrednost = $kursZaDestValutu != 0 ? $sumaUDinarima / $kursZaDestValutu : 0;

			$sql = 'INSERT into transakcije (id_racuna, iznos_transakcije, opis, tip_transakcije, datum_transakcije, id_racuna_prenos, vrednost_u_valuti_prenosa)
					values (?, ?, ?, ?, ?, ?, ?)';

			$prep = $this->dbc->getConnection()->prepare($sql);
			$res = $prep->execute([$targetRacun, $suma, 'interni prenos', 3, date("Y/m/d"), $destRacun, $finalnaDestVrednost]);

		}

		public function izracunajStanjePoRacunu(int $racunId)
		{
			$sql = 'select
					(select ifnull(sum(iznos_transakcije), 0) from transakcije where id_racuna = ? and tip_transakcije = 2) +
					(select ifnull(sum(vrednost_u_valuti_prenosa), 0) from transakcije where id_racuna_prenos = ? and tip_transakcije = 3) -
					(select ifnull(sum(iznos_transakcije), 0) from transakcije where id_racuna = ? and (tip_transakcije = 1 or tip_transakcije = 3)) as balance';

			$prep = $this->dbc->getConnection()->prepare($sql);
			$res = $prep->execute([$racunId, $racunId, $racunId]);

			$info = [];

			if ($res)
			{
				$info = $prep->fetch(\PDO::FETCH_OBJ);
			}

			return $info->balance;
		}

		public function odrediValutuZaRacun(int $racunId)
		{
			$sql = 'SELECT valuta_racuna FROM racun WHERE id = ?';

			$prep = $this->dbc->getConnection()->prepare($sql);
			$res = $prep->execute([$racunId]);

			$info = [];

			if ($res)
			{
				$info = $prep->fetch(\PDO::FETCH_OBJ);
			}		

			return $info->valuta_racuna;		
		}

		public function izracunajKursZaValutu(int $valuta)
		{
			$sql = 'SELECT iznos FROM kurs WHERE id_valute = ?';

			$prep = $this->dbc->getConnection()->prepare($sql);
			$res = $prep->execute([$valuta]);

			$info = [];

			if ($res)
			{
				$info = $prep->fetch(\PDO::FETCH_OBJ);
			}		

			return $info->iznos;			
		}

		public function getTransferArchive(int $korisnickiId)
		{
			$sql = 'SELECT transakcije.datum_transakcije, r1.broj_racuna as sa_racuna, r2.broj_racuna na_racun, transakcije.iznos_transakcije
					FROM transakcije JOIN racun r1 ON transakcije.id_racuna = r1.id
					JOIN racun r2 ON transakcije.id_racuna_prenos = r2.id
					WHERE id_racuna in (SELECT distinct id FROM racun WHERE korisnicki_id = ?)
					AND (tip_transakcije = 3 OR tip_transakcije = 4)';

			$prep = $this->dbc->getConnection()->prepare($sql);
			$res = $prep->execute([$korisnickiId]);

			$info = [];

			if ($res)
			{
				$info = $prep->fetchAll(\PDO::FETCH_OBJ);
			}

			return $info;

		}
	}