<?php
	include("includes/config.php");
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");

	$account = new Account($con);

	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");

	function getInputValue($name)
	{
		if(isset($_POST[$name]))
		{
			echo $_POST[$name];
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Musix</title>
</head>
<body>
	<div id="inputContainer">
		<form id="loginForm" action="register.php" method="POST">
			<h2>Login to your account</h2>
			<p>
				<?php echo $account->getError(Constants::$loginFailed); ?>
				<label for="loginUsername">User Name</label>
				<input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. JohnSmith" required></p>
			<p>
				<label for="loginPassword">Password</label>
				<input id="loginPassword" name="loginPassword" type="password" placeholder="Your Password" required></p>
			<button type="submit" name="loginButton">Log In</button>
		</form>

		<form id="registerForm" action="register.php" method="POST">
			<h2>Create your free account</h2>
			<p>
				<?php echo $account->getError(Constants::$usernameSize); ?>
				<?php echo $account->getError(Constants::$usernameTaken); ?>
				<label for="username">User Name</label>
				<input id="username" name="username" type="text" placeholder="e.g. JohnSmith" value="<?php getInputValue('username') ?>" required></p>

			<p>
				<?php echo $account->getError(Constants::$firstNameSize); ?>
				<label for="firstName">First Name</label>
				<input id="firstName" name="firstName" type="text" placeholder="e.g. John" value="<?php getInputValue('firstName') ?>" required></p>

			<p>
				<?php echo $account->getError(Constants::$lastNameSize); ?>
				<label for="lastName">Last Name</label>
				<input id="lastName" name="lastName" type="text" placeholder="e.g. Smith" value="<?php getInputValue('lastName') ?>" required></p>

			<p>
				<?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
				<?php echo $account->getError(Constants::$emailInvalid); ?>
				<?php echo $account->getError(Constants::$emailTaken); ?>
				<label for="email">Email</label>
				<input id="email" name="email" type="email" placeholder="e.g. John@gmail.com" value="<?php getInputValue('email') ?>" required></p>

			<p>
				<label for="email2">Confirm Email</label>
				<input id="email2" name="email2" type="email" placeholder="e.g. John@gmail.com" value="<?php getInputValue('email2') ?>" required></p>

			<p>
				<?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>
				<?php echo $account->getError(Constants::$passwordInvalid); ?>
				<?php echo $account->getError(Constants::$passwordSize); ?>
				<label for="password">Password</label>
				<input id="password" name="password" type="password" placeholder="Your Password" required></p>

			<p>
				<label for="password2">Confirm Password</label>
				<input id="password2" name="password2" type="password" placeholder="Your Password" required></p>
			<button type="submit" name="registerButton">Sign Up</button>
		</form>
	</div>
</body>
</html>