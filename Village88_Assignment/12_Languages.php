<?php
$languages = array('PHP', 'JS', 'Ruby');
//1
echo "<select>";
for($index=0; $index<count($languages); $index++){
	echo "<option>$languages[$index]</option>";
}
echo "</select>";
//2
echo "<select>";
foreach($languages as $language){
	echo "<option>$language</option>";
}
echo "</select>";

function select_language($languages){
	echo "<select>";
	foreach($languages as $language){
		echo "<option>$language</option>";
	}
	echo "</select>";
}
//3
array_push($languages,'HTML','CSS');
select_language($languages);

?>
