<?php
// Read input
$input1 = trim(fgets(STDIN));
$input2 = trim(fgets(STDIN));
$input3 = trim(fgets(STDIN));

// TODO: Write your code here
$num1 = intval($input1);
$num2 = intval($input2);
$num3 = intval($input3);
$remainder1 = $num1 % $num2;
$remainder2 = $num2 % $num3;
$evenCheck = $num1 % 2;
$divisibleBy5 = $num3 % 5;

// Output the results in the required format
echo "Number 1: " . $num1 . "\n";
echo "Number 2: " . $num2 . "\n";
echo "Number 3: " . $num3 . "\n";
echo "Remainder (" . $num1 . " % " . $num2 . "): " . $remainder1 . "\n";
echo "Remainder (" . $num2 . " % " . $num3 . "): " . $remainder2 . "\n";
echo "Even Check (" . $num1 . " % 2): " . $evenCheck . "\n";
echo "Divisible by 5 (" . $num3 . " % 5): " . $divisibleBy5;
?>