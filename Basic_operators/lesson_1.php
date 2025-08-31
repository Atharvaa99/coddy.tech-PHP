<?php
// Read input
$num1 = intval(fgets(STDIN));
$num2 = intval(fgets(STDIN));

// TODO: Write your code here to perform the calculations
$sum = $num1 + $num2;
$difference = $num1 - $num2;
$product = $num1 * $num2;
$quotient = $num1 / $num2;

// Output the results
echo "Addition: " . $sum . "\n";
echo "Subtraction: " . $difference . "\n";
echo "Multiplication: " . $product . "\n";
echo "Division: " . $quotient . "\n";
?>gi