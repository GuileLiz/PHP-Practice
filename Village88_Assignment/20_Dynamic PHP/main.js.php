<?php
	header('Content-type: application/javascript');
?>
$(document).ready(function(){
	alert("You are <?=rand(10,90);?>0x better than before!");
	console.log("You are <?=rand(10,90);?>0x better than before!");
});