<html>
<head>
	<style>
		table, th, td { 
			border: 1px solid black;
			margin: 0;
		}
		table {
			border-spacing:0;
		}
		.odd-row {
			color:blue;
		}
		.even-row {
			color:red
		}
		.even-row, .odd-row {
			text-align:center;
			height: 25px;
			width: 25px;
			font-family: Arial, Helvetica, sans-serif;
		}
	</style>
</head>
<body>
	<table>
		<tr>
<?php  
	$letters = array("B","I","N","G","O");
	//Creating the top most part of bingo card 
	foreach($letters as $letter) { ?>
			<th class="odd-row"><?=$letter?></th>
<?php } ?>
		</tr>
		<tr>
<?php for($number=2; $number<=2*5; $number+=2) { ?>
			<td class="even-row"><?=$number?></td>
<?php } ?>
		</tr>
		<tr>
<?php for($number=3; $number<=3*5; $number+=3) { ?>
			<td class="odd-row"><?=$number?></td>
<?php } ?>
		</tr>
		<tr>
<?php for($number=4; $number<=4*5; $number+=4) { ?>
			<td class="even-row"><?=$number?></td>
<?php } ?>
		</tr>
		<tr>
<?php for($number=5; $number<=5*5; $number+=5) { ?>
			<td class="odd-row"><?=$number?></td>
<?php } ?>
		</tr>
		<tr>
<?php for($number=6; $number<=6*5; $number+=6) { ?>
			<td class="even-row"><?=$number?></td>
<?php } ?>
		</tr>
	</table>
</body>
</html>