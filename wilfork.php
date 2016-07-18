<input type="button" id="1" class="sound-button" value="Double Team" data="doubleTeam"/>
<script>
	window.addEventListener("load", start);

	function start(){
		let buttons = document.getElementsByClassName("sound-button");
		
		for(let i=0; i<buttons.length; i++){
		buttons[i].addEventListener("click", playAudio);
		}
	}

	function playAudio(e){
		console.log(e.target.getAttribute("data"));
		let clip = new Audio("clips/" + e.target.getAttribute("data") + ".mp3");
		clip.play();
	}
</script>
<?php
