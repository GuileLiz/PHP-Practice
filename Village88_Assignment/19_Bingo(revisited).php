<!-- 
convert it so that the first row "BINGO" is header (h1) now instead of being in a table. 
Then for the font color, make it alternate per cell (like a chessboard). 

-->
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
		.light {
			background-color:lavenderblush;
		}
		.dark {
			background-color:burlywood;
		}
		.dark, .light {
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
	foreach($letters as $key => $letter) { ?>
		<?php if (($key+1)%2 == 0) { ?>
			<th class="light"><?=$letter?></th> 
		<?php  } else { ?>
			<th class="dark"><?=$letter?></th> 
		<?php } ?>
<?php } ?>
		</tr>
		<tr>
<?php for($number=2; $number<=2*5; $number+=2) { ?>
			<?php  if ($number%4 != 0) { ?>
				<th class="light"><?=$number?></th> 
			<?php  } else { ?>
				<th class="dark"><?=$number?></th> 
			<?php } ?>
<?php } ?>
		</tr>
		<tr>
<?php for($number=3; $number<=3*5; $number+=3) { ?>
			<?php  if ($number%6 == 0) { ?>
				<th class="light"><?=$number?></th> 
			<?php  } else { ?>
				<th class="dark"><?=$number?></th> 
			<?php } ?>
<?php } ?>
		</tr>
		<tr>
<?php for($number=4; $number<=4*5; $number+=4) { ?>
			<?php  if ($number%8 != 0) { ?>
				<th class="light"><?=$number?></th> 
			<?php  } else { ?>
				<th class="dark"><?=$number?></th> 
			<?php } ?>
<?php } ?>
		</tr>
		<tr>
<?php for($number=5; $number<=5*5; $number+=5) { ?>
			<?php  if ($number%10 == 0) { ?>
				<th class="light"><?=$number?></th> 
			<?php  } else { ?>
				<th class="dark"><?=$number?></th> 
			<?php } ?>
<?php } ?>
		</tr>
		<tr>
<?php for($number=6; $number<=6*5; $number+=6) { ?>
			<?php  if ($number%12 != 0) { ?>
				<th class="light"><?=$number?></th> 
			<?php  } else { ?>
				<th class="dark"><?=$number?></th> 
			<?php } ?>
<?php } ?>
		</tr>
	</table>
</body>
</html>