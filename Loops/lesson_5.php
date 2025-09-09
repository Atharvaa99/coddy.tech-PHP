<?php
// Read input
$numberList = trim(fgets(STDIN));
$targetThreshold = intval(trim(fgets(STDIN)));

// Convert the number list string into an array
$numbers = explode(',', $numberList);

// TODO: Write your code here
$flag = false;
foreach($numbers as $number){
    echo "Checking: $number\n";
    if ($number >= $targetThreshold){
        echo "Found: $number meets the threshold of $targetThreshold\n";
        $flag = true;
        break;
    }
}
if(!$flag){
    echo "No number found that meets the threshold of $targetThreshold";
}

?>