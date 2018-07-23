<?php
	class Account
	{
		private $errorArray;

		public function __construct()
		{
			$this->errorArray = array();
		}

		public function register($userName, $firstName, $lastName,
			$email, $email2, $password, $password2)
		{
			$this->validateUserName($userName);
			$this->validateFirstName($firstName);
			$this->validateLastName($lastName);
			$this->validateEmails($email, $email2);
			$this->validatePasswords($password, $password2);
		}

		// Validate Functions
		private function validateUserName($userName)
		{
			if(srtlen($userName) > 20 || srtlen($userName) < 4)
			{
				array_push($this->errorArray, "Your username must be 
					between 4 and 20 characters in length.");
			}
		}

		private function validateFirstName($firstName)
		{
			
		}

		private function validateLastName($lastName)
		{
			
		}

		private function validateEmails($email, $email2)
		{
			
		}

		private function validatePasswords($password, $password2)
		{
			
		}
	}
?>