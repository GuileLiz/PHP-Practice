<!-- <?php
$list = array(2,4,6,8);
foreach($list as $key => $value){
		echo $key . " - " . $value ."<br />";
	}
?>
// 0-2 1-4 2-6 3-8 -->

<!-- <?php
$list = array(2,4,6,8);
foreach($list as $value){
     echo $value ."<br />";
}
// 2 4 6 8	
?> -->

<!-- <?php
$fruits= array("A" => "Apple", "B" => "Banana");
foreach($fruits as $key => $value)
{
     echo $key . " - " . $value ."<br />";
}
// A - Apple B - Banana
?> -->

<!-- <?php
$fruits= array("A" => "Apple", "B" => "Banana");
foreach($fruits as $key => $value){
     echo $value ."<br />";
}
// Apple Banana
?> -->

<!-- <?php
$fruits= array("A" => "Apple", "B" => "Banana");
foreach($fruits as $key => $value){
     echo $key ."<br />";
}
// A B
?> -->

<!-- <?php
$plots = array( array("a1", "a2", "a3"), array("b1", "b2", "b3"), array("c1", "c2", "c3") );
foreach($plots as $key => $value){
     echo "Key is {$key}<br />";
     echo "logging the value";
     var_dump($value);
	 	/* Key is 0, array (size=3)
		0 => string 'a1' (length=2)
		1 => string 'a2' (length=2)
		2 => string 'a3' (length=2)  */
}
?> -->

<?php
$plots = array( array("a1", "a2", "a3"), array("b1", "b2", "b3"), array("c1", "c2", "c3") );
foreach($plots as $value)
{
     echo "logging the value";
     var_dump($value);
	 //logging the value 0,1,2
}
?>

<?php
$nations = array( array("PH"=>"Philippines", "KR"=>"South Korea"), array("PHP"=>"Philippine peso", "KRW"=>"South Korean won"), array("Manila"=>"Maynilad", "Seoul"=>"Seorabeol") );
foreach($nations as $key => $value)
{
     echo "key is {$key}<br />";
     foreach($value as $key2=>$value2)
     {
             echo $key2 ." - " . $value2."<br />";
     }
}
?>

<?php

?>
