<?php
$file = fopen("us-500.csv","r");
while(! feof($file)) {
	print_r(fgetcsv($file));
}
fclose("us-500.csv","r");
?>