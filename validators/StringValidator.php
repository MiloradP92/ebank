<?php
	
	namespace App\Validators;
	
	use \App\Core\Validator;
	
	class StringValidator implements Validator
	{	
		private $minLength;
		private $maxLength;
		
		public function __construct()
		{
			$this->minLength = 0; 
			$this->maxLength = 255; 
		}
	
		public function &setMinLength($length): StringValidator
		{
			$this->minLength = max(0, $length);
			return $this;
		}
		
		public function &setMaxLength($length): StringValidator
		{
			$this->maxLength = max(1, $length);
			return $this;
		}
	
		public function isValid(string $value): bool
		{						
			$pattern = '/^.{' . $this->minLength . ',' . $this->maxLength . '}$/';
		
			return \boolval(preg_match($pattern, $value));		
		}
	}