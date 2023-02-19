<?php
//declare function
function get_records($pets) {
    $records = array();
    foreach($pets as $pet) {
       $records[] = "<p>Pet name is {$pet['name']}, a {$pet['gender']} {$pet['breed']}.</p>";
    }    
    return $records;
}

//initialize variable
$pets = array(
   array(
      'name' => 'Ming Ming',
      'breed' => 'Puspin',
      'gender' => 'female'
   ),
   array(
     'name' => 'Brownie',
     'breed' => 'Aspin',
     'gender' => 'male'
   )
);

//invoke function
$records = get_records($pets);
var_dump($records);
// Pet name is Ming Ming, a female Puspin 
// Pet name is Brownie, a male sAspin 
?>
