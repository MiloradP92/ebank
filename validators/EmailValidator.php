<?php
	
	namespace App\Validators;
	
	use \App\Core\Validator;
	
	class EmailValidator implements Validator
	{			
		public function __construct()
		{
		}
		
		public function isValid(string $value): bool
		{						
			$pattern = '/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/';
		
			return \boolval(preg_match($pattern, $value));		
		}
	}