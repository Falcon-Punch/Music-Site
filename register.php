<!--
Project: Spotify Music Site clone
Date: 07/20/2018
Author: Joseph Schell
Sources and Inspirations:
	https://icons8.com/
	https://www.spotify.com/us/
	https://www.udemy.com/
	https://www.nasa.gov/
	http://hubblesite.org/images/gallery
	2001: A Space Odyssey (HAL 9000)
-->
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

<html>
<head>
	<title>Welcome to Musix</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="assets/css/register.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>
</head>
<body>
	<?php
		if(isset($_POST['registerButton']))
		{
			echo '<script>
				$(document).ready(function()
				{
					$("#loginForm").hide();
					$("#registerForm").show();
				})
				</script>';
		}
		else
		{
			echo '<script>
				$(document).ready(function()
				{
					$("#loginForm").show();
					$("#registerForm").hide();
				})
				</script>';
		}
	?>
	<script>
		$(document).ready(function()
		{
			$("#loginForm").show();
			$("#registerForm").hide();
		})
	</script>
	<div id="background">
		<div id="loginContainer">
			<div id="inputContainer">
				<form id="loginForm" action="register.php" method="POST">
					<h2>Login to your account</h2>
					<p>
						<?php echo $account->getError(Constants::$loginFailed); ?>
						<label for="loginUsername">User Name</label>
						<input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. JohnSmith" value="<?php getInputValue('loginUsername') ?>"required></p>
					<p>
						<label for="loginPassword">Password</label>
						<input id="loginPassword" name="loginPassword" type="password" placeholder="Your Password" required></p>

					<button type="submit" name="loginButton">Log In</button>
					<div id="hasAccountText">
						<span id="hideLogin">Don't have an account yet? Sign up here.</span>
					</div>
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
					<div id="hasAccountText">
						<span id="hideRegister">
						Already have an account? Log in here.</span>
					</div>
				</form>
			</div>
			  <div id="outerContainer">
			    <div id="container">
			    	<div id="loginText">
						<h1>Stream great music</h1>
						<h2>Listen to loads of songs for free!</h2>
						<ul>
							<li>Access to all genres and generations of music</li>
							<li>Discover new music you'll fall in love with</li>
							<li>Create your own playlists</li>
						</ul>
					</div>
			      <div class="circle" style="animation-delay: 3s"></div>
			      <div class="circle" style="animation-delay: -2s"></div>
				  <div class="circle" style="animation-delay: -1s"></div>
				  <div class="circle" style="animation-delay: 0s"></div>
			      </div>
			  </div>
		</div>
	</div>
</body>
</html>