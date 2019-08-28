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
			$sql = 'SELECT * FROM racun WHERE racun_id = ?;';

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
			$sql = 'SELECT r.racun_id as id_racuna, r.broj_racuna as broj_racuna, tr.opis as tip_racuna, v.opis as valuta_racuna, r.datum_kreacije_at as datum_kreacije
					FROM racun r JOIN tip_racuna tr ON r.tip_racuna_id = tr.tip_racuna_id
					JOIN valuta v ON r.valuta_id = v.valuta_id WHERE r.korisnik_id = 1';
			
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
			$sql = 'SELECT r.broj_racuna as broj_racuna, tr.opis as tip_racuna, v.opis as valuta_racuna, r.datum_kreacije_at as datum_kreacije
					FROM racun r JOIN tip_racuna tr ON r.tip_racuna_id = tr.tip_racuna_id JOIN valuta v ON r.valuta_id = v.valuta_id WHERE r.racun_id = ?';

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
			$sql = 'SELECT * FROM transakcije WHERE racun_id = ?';

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
			$sql = 'SELECT racun_id FROM racun WHERE korisnik_id = ? and tip_racuna_id = 1 order by racun_id limit 1';
			
			$prep = $this->dbc->getConnection()->prepare($sql);
			$res = $prep->execute([$korisnickiId]);

			$info = [];

			if ($res)
			{
				$info = $prep->fetch(\PDO::FETCH_OBJ);
			}		

			return $info->racun_id;
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

			$sql = 'INSERT into transakcije (racun_id, iznos_transakcije, opis, tip_transakcije_id, datum_transakcije_at, racun_id_prenos, vrednost_u_valuti_prenosa)
					values (?, ?, ?, ?, ?, ?, ?)';

			$prep = $this->dbc->getConnection()->prepare($sql);
			$res = $prep->execute([$targetRacun, $suma, 'interni prenos', 3, date("Y/m/d"), $destRacun, $finalnaDestVrednost]);

		}

		public function izracunajStanjePoRacunu(int $racunId)
		{
			$sql = 'select
					(select ifnull(sum(iznos_transakcije), 0) from transakcije where racun_id = ? and tip_transakcije_id = 2) +
					(select ifnull(sum(vrednost_u_valuti_prenosa), 0) from transakcije where racun_id_prenos = ? and tip_transakcije_id = 3) -
					(select ifnull(sum(iznos_transakcije), 0) from transakcije where racun_id = ? and (tip_transakcije_id = 1 or tip_transakcije_id = 3)) as balance';

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
			$sql = 'SELECT valuta_id FROM racun WHERE racun_id = ?';

			$prep = $this->dbc->getConnection()->prepare($sql);
			$res = $prep->execute([$racunId]);

			$info = [];

			if ($res)
			{
				$info = $prep->fetch(\PDO::FETCH_OBJ);
			}		

			return $info->valuta_id;		
		}

		public function izracunajKursZaValutu(int $valuta)
		{
			$sql = 'SELECT iznos FROM kurs WHERE valuta_id = ?';

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
			$sql = 'SELECT transakcije.datum_transakcije_at, r1.broj_racuna as sa_racuna, r2.broj_racuna na_racun, transakcije.iznos_transakcije
					FROM transakcije JOIN racun r1 ON transakcije.racun_id = r1.racun_id
					JOIN racun r2 ON transakcije.racun_id_prenos = r2.racun_id
					WHERE r1.racun_id in (SELECT distinct racun_id FROM racun WHERE korisnik_id = ?)
					AND (tip_transakcije_id = 3 OR tip_transakcije_id = 4)';

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