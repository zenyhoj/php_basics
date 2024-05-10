<?php 
// $names = ["Joe", "Elmer", "eddie"];

// if(isset($names[0])) {
//   echo $names[0];
// } else {
//   echo 'Name does not exist';
// }

/* Associative Array */

$person = Array(
  'first_name' => 'Joeb',
  'last_name' => 'Balingit',
  'address' => 'Rizal'
);

echo $person['first_name'] . " " .  $person['last_name'] . " is living in " . $person['address'];

?>