<?php
$binary = array( 1, 1, 0, 1, 1, 0, 1); 
function get_count($arr) {
	$zeroes=0;
	$ones=0;
	foreach($arr as $num){
		if($num == 1){
			$ones++;
		} else {
			$zeroes++;
		}
	}
	return array($zeroes,$ones);
}
$output = get_count($binary); 
var_dump($output); 
//$output should be equal to array("zeroes" => 2,  "ones" => 5);
?>