<?php
$users = array( 
	array('cardholder_name'=> "Michael Choi", 	'cvc' => 123, 'acc_num' => '1234 5678 9876 5432'),
	array('cardholder_name'=> "John Supsupin",	'cvc' => 789, 'acc_num' => '0001 1200 1500 1510'),
	array('cardholder_name'=> "KB Tonel", 	 	   'cvc' => 567, 'acc_num' => '4568 456 123 5214'),
	array('cardholder_name'=> "Mark Guillen", 	'cvc' => 345, 'acc_num' => '123 123 123 123') 
);
var_dump($users)
?>
<html>
	<head></head>
	<body>
		<table>
		<tr>
<?php foreach($users as $user) { ?>
			<th><?="$user"?></th>
<?php } ?>

		</tr>
		</table>
	</body>
</html>