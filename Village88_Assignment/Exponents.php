<?php
$digits = array(3, 12, 30);
function exponential($digits){
        $cube = array();
        foreach($digits as $digit) {
                $cube[]= [$digit**3];	
        }
        return $cube; 
}
$result = exponential($digits);
var_dump($result); 
/* expected output:
        array (size=3)
        0 => int 27
        1 => int 1728
        2 => int 27000
*/
?>