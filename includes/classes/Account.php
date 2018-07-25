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
				array_push($this->errorArray, Constants::$usernameSize);
				return;
			}

			// TODO: Check if username exists.
		}

		private function validateFirstName($firstName)
		{
			if(strlen($firstName) > 20 || strlen($firstName) < 2)
			{
				array_push($this->errorArray, Constants::$firstNameSize);
				return;
			}
		}

		private function validateLastName($lastName)
		{
			if(strlen($lastName) > 20 || strlen($lastName) < 2)
			{
				array_push($this->errorArray, Constants::$lastNameSize);
				return;
			}
		}

		private function validateEmails($email, $email2)
		{
			if($email != $email2)
			{
				array_push($this->errorArray, Constants::$emailsDoNotMatch);
				return;
			}

			if(!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
				array_push($this->errorArray, Constant::$emailInvalid);
				return;
			}

			// TODO: Check that the user name hasn't already been used.
		}

		private function validatePasswords($password, $password2)
		{
			if($password != $password2)
			{
				array_push($this->errorArray, Constants::$passwordsDoNotMatch);
				return;
			}

			if(preg_match('/[^A-Za-z0-9]/', $password))
			{
				array_push($this->errorArray, Constants::$passwordInvalid);
				return;
			}

			if(strlen($password) > 30 || strlen($password) < 6)
			{
				array_push($this->errorArray, Constants::$passwordSize);
				return;
			}
		}
	}
?>