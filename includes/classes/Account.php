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

			if(empty($this->errorArray))
			{
				// Insert into database
				return true;
			}
			else
			{
				return false;
			}
		}

		public function getError($error)
		{
			if(!in_array($error, $this->errorArray))
			{
				$error = "";
			}
			return "<span class='errorMessage'>$error</span>";
		}

		// Validate Functions
		private function validateUserName($userName)
		{
			if(strlen($userName) > 20 || strlen($userName) < 4)
			{
				array_push($this->errorArray, "Your username must be 
					between 4 and 20 characters in length.");
				return;
			}

			// TODO: Check if username exists.
		}

		private function validateFirstName($firstName)
		{
			if(strlen($firstName) > 20 || strlen($firstName) < 2)
			{
				array_push($this->errorArray, "Your first name must be 
					between 2 and 20 characters in length.");
				return;
			}
		}

		private function validateLastName($lastName)
		{
			if(strlen($lastName) > 20 || strlen($lastName) < 2)
			{
				array_push($this->errorArray, "Your last name must be 
					between 2 and 20 characters in length.");
				return;
			}
		}

		private function validateEmails($email, $email2)
		{
			if($email != $email2)
			{
				array_push($this->errorArray, "Your emails do not match.");
				return;
			}

			if(!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
				array_push($this->errorArray, "Email is invalid.");
				return;
			}

			// TODO: Check that the user name hasn't already been used.
		}

		private function validatePasswords($password, $password2)
		{
			if($password != $password2)
			{
				array_push($this->errorArray, "Your passwords do not match.");
				return;
			}

			if(preg_match('/[^A-Za-z0-9]/', $password))
			{
				array_push($this->errorArray, "Your password may only contain numbers or letters.");
				return;
			}

			if(strlen($password) > 30 || strlen($password) < 6)
			{
				array_push($this->errorArray, "Your password must be 
					between 6 and 30 characters in length.");
				return;
			}
		}
	}
?>