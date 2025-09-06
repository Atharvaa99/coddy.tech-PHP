<?php
// Read inputs for fruits (3 items)
$fruit1 = trim(fgets(STDIN));
$fruit2 = trim(fgets(STDIN));
$fruit3 = trim(fgets(STDIN));

// Read inputs for numbers (4 items)
$num1 = trim(fgets(STDIN));
$num2 = trim(fgets(STDIN));
$num3 = trim(fgets(STDIN));
$num4 = trim(fgets(STDIN));

// Read inputs for cities (2 items)
$city1 = trim(fgets(STDIN));
$city2 = trim(fgets(STDIN));

$fruits = [$fruit1, $fruit2, $fruit3];
$numbers = [$num1, $num2, $num3, $num4];
$cities = [$city1, $city2];

// TODO: Output the arrays in the required format
echo "Fruits: " . $fruits[0] . ", " . $fruits[1] . ", " . $fruits[2] . "\n";
echo "Numbers: " . $numbers[0] . ", " . $numbers[1] . ", " . $numbers[2] . ", " . $numbers[3] . "\n";
echo "Cities: " . $cities[0] . ", " . $cities[1] . "\n";

?>