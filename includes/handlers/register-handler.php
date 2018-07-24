<?php

function formatFormUserName($inputText)
{
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ","", $inputText);
	return $inputText;
}

function formatFormString($inputText)
{
	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ","", $inputText);
	$inputText = ucfirst(strtolower($inputText));
	return $inputText;
}

function formatFormPassword($inputText)
{
	$inputText = strip_tags($inputText);
	return $inputText;
}

if(isset($_POST['registerButton']))
{
	// Register button pressed
	$userName = formatFormUserName($_POST['userName']);
	$firstName = formatFormString($_POST['firstName']);
	$lastName = formatFormString($_POST['lastName']);
	$email = formatFormString($_POST['email']);
	$email2 = formatFormString($_POST['email2']);
	$password = formatFormPassword($_POST['password']);
	$password2 = formatFormPassword($_POST['password2']);

	$wasSuccessful = $account->register($userName, $firstName, $lastName, $email,
		$email2, $password, $password2);

	if($wasSuccessful)
	{
		header("Location: index.php");
	}
}

?>