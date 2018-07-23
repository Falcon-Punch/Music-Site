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
				<label for="username">User Name</label>
				<input id="username" name="username" type="text" placeholder="e.g. JohnSmith" required></p>

			<p>
				<label for="firstname">First Name</label>
				<input id="firstname" name="firstname" type="text" placeholder="e.g. John" required></p>

			<p>
				<label for="lastname">Last Name</label>
				<input id="lastname" name="lastname" type="text" placeholder="e.g. Smith" required></p>

			<p>
				<label for="email">Email</label>
				<input id="email" name="email" type="email" placeholder="e.g. John@gmail.com" required></p>

			<p>
				<label for="email2">Confirm Email</label>
				<input id="email2" name="email2" type="email" placeholder="e.g. John@gmail.com" required></p>

			<p>
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