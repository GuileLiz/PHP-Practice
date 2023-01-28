<?php
    for($number=1; $number<=1000; $number++){
        if($number % 3 == 0) {
            echo $number . "=> Multiple <br>";
        } else {
            echo $number . "=> Not multiple <br>";
        }
    } 
?>