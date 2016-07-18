<?php
$files = scandir("clips");

for($i=2; $i<count($files);$i++){
	$prettyNameArr = explode("_",basename($files[$i], ".mp3"));
	$prettyName="";
	
	for($j=0;$j<count($prettyNameArr);$j++){
		if($j != count($prettyName)-1){
			$prettyName .= " ";
			$prettyName .= ucwords($prettyNameArr[$j]);
		}
		else $prettyName.= ucwords(basename($prettyNameArr[$j]));
	}

	echo "<input type='button' id='wilfork-1' class='sound-button' value='$prettyName' data='$files[$i]'/>";
}
?>
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
		let clip = new Audio("clips/" + e.target.getAttribute("data"));
		clip.play();
	}
</script>
