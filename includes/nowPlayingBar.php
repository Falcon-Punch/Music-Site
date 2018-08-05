<?php
$songQuery = mysqli_query($con, "SELECT id FROM songs ORDER BY RAND() LIMIT 10");

$resultArray = array();

while($row = mysqli_fetch_array($songQuery)) 
{
	array_push($resultArray, $row['id']);
}

$jsonArray = json_encode($resultArray);
?>

<script>

$(document).ready(function() 
{
	currentPlaylist = <?php echo $jsonArray; ?>;
	audioElement = new Audio();
	setTrack(currentPlaylist[0], currentPlaylist, true);
});


function setTrack(trackId, newPlaylist, play) 
{
	audioElement.setTrack("assets/music/bensound-clearday.mp3");

	if(play == true)
	{
		audioElement.play();
	}
}

</script>

<div id="nowPlayingBarContainer">
	<div id="nowPlayingBar">
		<div id="nowPlayingLeft">
			<div class="content">
				<span class="albumLink">
					<img src="assets/images/icons/alien.png" class="albumArtwork">
				</span>
				<div class="trackInfo">
					<span class="trackName">
						<span>Track Name</span>
					</span>
					<span class="artistName">
						<span>Artist Name</span>
					</span>
				</div>
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
			<div class="volumeBar">
				<button class="controlButton volume" title="Volume button">
					<img src="assets/images/icons/UV/volume.png" alt="Volume">
				</button>
				<div class="progressBar">
					<div class="progressBarBG">
						<div class="progress"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>