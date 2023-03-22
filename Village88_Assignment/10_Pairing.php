<?php
$cards = array("King" => 13, "Queen" => 12, "jack" => 11, "Ace" => 1);
echo "List of keys in the array:";

foreach($cards as $key => $value){
	echo "<li>$key</li>";
}
foreach($cards as $key => $value){
	echo "<p>The value of $key in Pyramid Solitaire is $value.<p>";
}
?>