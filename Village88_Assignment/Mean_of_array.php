<?php
    $numbers = array(13,143,88,65,120);
    $sum=0;
    forEach($numbers as $number){
        $sum += $number;
    }
    echo $sum/count($numbers);
?>