<?php
$users = array( 
	array('cardholder_name'=> "Michael Choi", 	'cvc' => 123, 'acc_num' => '1234 5678 9876 5432'),
	array('cardholder_name'=> "John Supsupin",	'cvc' => 789, 'acc_num' => '0001 1200 1500 1510'),
	array('cardholder_name'=> "KB Tonel",		'cvc' => 567, 'acc_num' => '4568 456 123 5214'),
	array('cardholder_name'=> "Mark Guillen", 	'cvc' => 345, 'acc_num' => '123 123 123 123'),
	array('cardholder_name'=> "Jane Doe", 'cvc' => 456, 'acc_num' => '2345 6789 0123 4567'),
    array('cardholder_name'=> "John Smith", 'cvc' => 789, 'acc_num' => '9876 5432 1010 2468'),
    array('cardholder_name'=> "Alice Johnson", 'cvc' => 234, 'acc_num' => '7777 7777 7777 7777'),
    array('cardholder_name'=> "Bob Williams", 'cvc' => 678, 'acc_num' => '5555 5555 5555 5555'),
    array('cardholder_name'=> "Sarah Lee", 'cvc' => 901, 'acc_num' => '1111 1111 1111 1111')
);
	$headers=array("ID","Name","Name in uppercase","Acnount Num","CVC Num","Full Account","Length of full account","Is valid");
/* var_dump($users) */
?>
<html>
	<head>
		<style>
			table, th, td {border: 1px solid black;}
			table {border-spacing:0}
			.third-row {background-color: gray;}
		</style>
	</head>
	<body>
		<table>
			<tr>
<?php foreach($headers as $header) { ?>
				<th><?=$header?></th>
<?php } ?>
			</tr>
<?php 
	$ID=1;
	foreach($users as $index => $user) { ?>
			<tr <?=$index % 3 ==2 ? ' class="third-row" ':'' ?> >
				<td><?=$ID?></td>
				<td><?=$user['cardholder_name']?></td>
				<td><?=strtoupper($user['cardholder_name'])?></td>
				<td><?=$user['acc_num']?></td>
				<td><?=$user['cvc']?></td>
				<td><?=$user['acc_num']." ".$user['cvc']?></td>
<?php $length_full_accouut=strlen(str_replace(" ","",$user['acc_num']))+str_replace(" ","",strlen($user['cvc'])) ?>
				<td><?=$length_full_accouut?></td>
				<td><?=$length_full_accouut==19?"yes":"no"?></td>
			</tr>
<?php $ID++;} ?>
		</table>
	</body>
</html>