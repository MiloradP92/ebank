<?php

	namespace App\Models;

	use App\Core\DatabaseConnection;

	class UserModel
	{
		private $dbc;

		public function __construct(DatabaseConnection &$dbc)
		{
			$this->dbc = $dbc;
		}

		public function getById(int $userId)
		{
			$sql = 'SELECT * FROM korisnik WHERE id = ?;';

			$prep = $this->dbc->getConnection()->prepare($sql);
			$res = $prep->execute([$userId]);
			$user = NULL;

			if ($res)
			{
				$user = $prep->fetch(\PDO::FETCH_OBJ);
			}

			return $user;
		}
	}