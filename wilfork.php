<style>
	.sound-button{
		width: 18%;
		display: inline-block;
		margin-bottom: 20px;
		margin-left: 1%;
		margin-right: 1%;
		height: 300px;
		color: #FFF;
		font-size: 24px;
		font-weight: bold;
		background-color: #33C3F0;
		border: solid 2px #222;
		border-radius: 50% 50%;
		cursor: pointer;
		box-shadow: -5px 5px 5px #555;

	}
</style>
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

	echo "<input type='button' id='wilfork-$i' class='sound-button' value='$prettyName' data='$files[$i]'/>";
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
