<?php
	class Account
	{
		public function __construct()
		{

		}

		public function register()
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
			echo "register function called!";
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