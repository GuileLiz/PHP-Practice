<?php
    $even_array = array();
    for($number=1; $number*2<1000; $number++) {
        $even_array[$number] = $number*2;
    }
    var_dump($even_array);
?>