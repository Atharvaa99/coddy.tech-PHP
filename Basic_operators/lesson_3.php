<?php
// Read input
$base = intval(fgets(STDIN));
$exp1 = intval(fgets(STDIN));
$exp2 = intval(fgets(STDIN));

// TODO: Write your code here to calculate the power values
// Create variables: $power1, $power2, $square, $cube
$power1 = $base ** $exp1;
$power2 = $base ** $exp2;
$square = $base ** 2;
$cube = $base ** 3;

// Output the results
echo "Base: " . $base . "\n";
echo "Power 1 (" . $base . "^" . $exp1 . "): " . $power1 . "\n";
echo "Power 2 (" . $base . "^" . $exp2 . "): " . $power2 . "\n";
echo "Square (" . $base . "^2): " . $square . "\n";
echo "Cube (" . $base . "^3): " . $cube;
?>