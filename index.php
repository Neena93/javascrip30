0
Star 0  Fork 5,530 MarcusCaldeira/JavaScript30
forked from wesbos/JavaScript30
Code  Pull requests 0  Projects 0  Wiki  Insights  Settings
Branch: master Find file Copy pathJavaScript30/01 - JavaScript Drum Kit/index-START.html
b8bc9cb  on Dec 8, 2016
@wesbos wesbos 🔥
1 contributor
RawBlameHistory
67 lines (59 sloc)  1.62 KB
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>JS Drum Kit</title>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>


		<div class="keys">
			<div data-key="65" class="key">
				<kbd>A</kbd>
				<span class="sound">clap</span>
			</div>
			<div data-key="83" class="key">
				<kbd>S</kbd>
				<span class="sound">hihat</span>
			</div>
			<div data-key="68" class="key">
				<kbd>D</kbd>
				<span class="sound">kick</span>
			</div>
			<div data-key="70" class="key">
				<kbd>F</kbd>
				<span class="sound">openhat</span>
			</div>
			<div data-key="71" class="key">
				<kbd>G</kbd>
				<span class="sound">boom</span>
			</div>
			<div data-key="72" class="key">
				<kbd>H</kbd>
				<span class="sound">ride</span>
			</div>
			<div data-key="74" class="key">
				<kbd>J</kbd>
				<span class="sound">snare</span>
			</div>
			<div data-key="75" class="key">
				<kbd>K</kbd>
				<span class="sound">tom</span>
			</div>
			<div data-key="76" class="key">
				<kbd>L</kbd>
				<span class="sound">tink</span>
			</div>
		</div>

		<audio data-key="65" src="sounds/clap.wav"></audio>
		<audio data-key="83" src="sounds/hihat.wav"></audio>
		<audio data-key="68" src="sounds/kick.wav"></audio>
		<audio data-key="70" src="sounds/openhat.wav"></audio>
		<audio data-key="71" src="sounds/boom%20(1).wav"></audio>
		<audio data-key="72" src="sounds/ride.wav"></audio>
		<audio data-key="74" src="sounds/snare.wav"></audio>
		<audio data-key="75" src="sounds/tom.wav"></audio>
		<audio data-key="76" src="sounds/tink.wav"></audio>

		<script>
			window.addEventListener("keydown", function(e) {
				const audio = document.querySelector('audio[data-key="${e.keyCode}"]);
				if(!audio)return//stop the  function from running all together
				audio.play();
			});
		</script>
	</body>
</html>
