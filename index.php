<?php 
$names = ["Joe", "Elmer", "eddie"];

// if(isset($names[0])) {
//   echo $names[0];
// } else {
//   echo 'Name does not exist';
// }

// foreach Loop
foreach($names as $name) {
  echo "<h1>$name</h1>";
}


// for Loop
for($i=0; $i<count($names); $i++) {
  echo "<ul><li>$names[$i]</li></ul>";
}



/* Associative Array with loops*/

$person = [
  'first_name' => 'Joeb',
  'last_name' => 'Balingit',
  'address' => 'Rizal'
];

foreach($person as $key => $person_info) {
  echo "<p>$key: $person_info</p>";
}

?>