<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Excel To HTML</title>
		<style>
			table, th, td { 
				border: 1px solid black;
				margin: 0;
			}
			table {
				border-spacing:0;
			}
		</style>
	</head>
	<body>
		<table>
			<tr>
	<?php
		$file = fopen("us-500.csv","r");
		while(! feof($file)) {
			foreach(fgetcsv($file) as $value=>$key){
				if ($value%11!=0 ) { ?>
					<td><?=$key?></td>
				
			</tr>
		</table>
		<?php 
				}
			}
		} ?>
		</body>
</html>
<!-- 	<?php
		$file = fopen("us-500.csv","r");
		while(! feof($file)) {
			foreach(fgetcsv($file) as $value=>$key){ //
				if ($value%11==0 && $value>0) { //////
					echo("<br/[>");
				} else {
					echo(" ".$key);
				}
			}
		}
		
		fclose("us-500.csv"); -->