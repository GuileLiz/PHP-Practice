<?php
header("Content-type: text/css");
?> 
<!-- If you have PHP code in a CSS file, for it to be read by PHP interpreter  -->
p {
	font-size: <?=rand(10,20);?>px;
	color: rgb(<?=rand(0,255);?>,<?=rand(0,255);?>,<?=rand(0,255)?>);
}
em {
	font-size: <?=rand(10,30);?>px;
	color: rgb(<?=rand(0,255);?>,<?=rand(0,255);?>,<?=rand(0,255)?>);
}




