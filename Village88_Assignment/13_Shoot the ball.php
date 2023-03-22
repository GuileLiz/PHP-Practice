<?php
$success = 0;
$fail = 0;
for($trial=1;$trial<=1000;$trial++){
	$result = rand(0,2);
	if($result==1){
		$success++;
	} else {
		$fail++;
	}
	echo "<p>Attempt #" .$trial. ": Shooting the ball... Success! ... Got " .$success. "x success  and " .$fail. "x epic fail(s) so far</p>";
}
echo "Practice ended."
?>