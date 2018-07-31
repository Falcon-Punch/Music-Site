
<?php
include("includes/config.php");

//session_destroy();

if(isset($_SESSION['userLoggedIn']))
{
	$userLoggedIn = $_SESSION['userLoggedIn'];
}
else
{
	header("Location: register.php");
}
?>

<html>
<head>
	<title>Music Streming Site</title>
</head>
<body>
	hello!
</body>
</html>