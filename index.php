
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
	<title>Music Streaming Site</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	Under Construction!!
	<div id="nowPlayingBarContainer">
		<div id="nowPlayingBar">
		</div>
	</div>

</body>
</html>