<?php
// Read input
$input1 = trim(fgets(STDIN));
$input2 = trim(fgets(STDIN));
$input3 = trim(fgets(STDIN));
$input4 = trim(fgets(STDIN));

// TODO: Write your code here

$a = intval($input1);
$b = intval($input2);
$c = intval($input3);
$d = intval($input4);

$result1 = $a + $b * $c;
$result2 = ($a + $b) * $c;
$result3 = $a * $b + $c * $d;
$result4 = ($a * $b) + ($c * $d);


// Output the results in the required format
echo "Expression 1 (a + b * c): " . $result1 . "\n";
echo "Expression 2 ((a + b) * c): " . $result2 . "\n";
echo "Expression 3 (a * b + c * d): " . $result3 . "\n";
echo "Expression 4 ((a * b) + (c * d)): " . $result4;
?>