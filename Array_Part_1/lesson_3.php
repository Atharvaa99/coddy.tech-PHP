<?php
// Predefined inventory array
$inventory = ["laptops", "phones", "tablets", "keyboards", "mice"];

// Read inputs
$index1 = intval(fgets(STDIN));
$newItem1 = trim(fgets(STDIN));
$index2 = intval(fgets(STDIN));
$newItem2 = trim(fgets(STDIN));

// TODO: Write your code here
// Convert index inputs to integers and update the inventory array
$inventory[$index1] = $newItem1;
$inventory[$index2] = $newItem2;
// Output the modified inventory
echo "Updated inventory: " . implode(", ", $inventory);
?>