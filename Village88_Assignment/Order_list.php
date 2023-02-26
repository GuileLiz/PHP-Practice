<?php
function print_orders($x){
	echo "<ol>";
	foreach($x as $order){
		echo "<li>$order</li>";
	}
	echo "</ol>";
}
$x = array('Spaghetti', 'Pizza', 'Iced tea');
print_orders($x);
?>