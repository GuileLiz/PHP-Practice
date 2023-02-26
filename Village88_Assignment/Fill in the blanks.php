<?php
$list = array(6, 1, 3, 5, 7);
foreach($list as $num){
	echo "<p>". str_repeat("_ ",$num) ."</p>";
}

$list = array(4, "Michael", 3, "Karen", 2, "Rogie");
foreach($list as $num){
	if(is_numeric($num)){
		echo "<p>". str_repeat("_ ",$num) ."</p>";
	} else {
		echo $num[0].str_repeat(" _",strlen($num)-1);
	}

}
?>