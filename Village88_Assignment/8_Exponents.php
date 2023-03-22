<?php
function exponential($digits,$num){
        $cube = array();
        foreach($digits as $digit) {
                $answer[]= [$digit**$num];	
        }
        return $answer; 
}
$digits = array(8,11,4);
$result = exponential($digits, 4);  
var_dump($result); 
/* expected output:
        array (size=3)
        0 => int 27
        1 => int 1728
        2 => int 27000
*/
?>