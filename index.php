
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
			<div id="nowPlayingLeft">
				<div class="content">
					<span class="albumLink">
						<img src="assets/images/icons/alien.png" class="albumArtwork">
					</span>
				</div>
			</div>
			<div id="nowPlayingCenter">
				<div class="content playerControls">
					<div class="buttons">
						<button class="controlButton shuffle" title="Shuffle button">
							<img src="assets/images/icons/UV/shuffle.png" alt="Shuffle">
						</button>
						<button class="controlButton previous" title="Previous button">
							<img src="assets/images/icons/UV/previous.png" alt="Previous">
						</button>
						<button class="controlButton play" title="Play button">
							<img src="assets/images/icons/UV/play.png" alt="Play">
						</button>
						<button class="controlButton pause" title="Pause button" style="display: none;">
							<img src="assets/images/icons/UV/pause.png" alt="Pause">
						</button>
						<button class="controlButton next" title="Next button">
							<img src="assets/images/icons/UV/next.png" alt="Next">
						</button>
						<button class="controlButton repeat" title="Repeat button">
							<img src="assets/images/icons/UV/repeat.png" alt="Repeat">
						</button>
					</div>
					<div class="playbackBar">
						<span class="progressTime current">0.00</span>
						<div class="progressBar">
							<div class="progressBarBG">
								<div class="progress"></div>
							</div>
						</div>
						<span class="progressTime remaining">0.00</span>
					</div>

				</div>
			</div>
			<div id="nowPlayingRight">
			</div>

		</div>
	</div>

</body>
</html>