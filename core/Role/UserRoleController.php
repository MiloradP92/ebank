<?php

	namespace App\Core\Role;
	
	use App\Core\Controller;
	
	class UserRoleController extends Controller
	{
		public function __pre()
		{
			$userId = $this->getSession()->get('user_id', null);			
			
			if ($userId == null)
			{
				$this->redirect('/ebank_app/login');
			}
		}		
	}