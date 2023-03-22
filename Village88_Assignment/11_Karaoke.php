<?php
function score_generator($score){
	if ($score<=49) echo "<h1>$score</h1> <h2>Never sing again, ever!</h2>";
	else if ($score>=50 && $score<80) echo "<h1>$score</h1><h2>Practice more!</h2>";
	else if ($score>=80 && $score<95) echo "<h1>$score</h1><h2>You're getting better!</h2>";
	else if ($score>=95 && $score<=100) echo "<h1>$score</h1><h2>What an excellent singer!</h2>";
}
for($i=0;$i<=50;$i++){
	$score = rand(1,100);
	score_generator($score);
}
?>