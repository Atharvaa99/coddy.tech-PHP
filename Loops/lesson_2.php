<?php
// Read input
$startNumber = trim(fgets(STDIN));
$message = trim(fgets(STDIN));

// Convert string to integer
$counter = intval($startNumber);

// TODO: Write your code here
while ($counter > 0){
    echo $message . " " . $counter . "\n";
    $counter--;
}
echo "Countdown complete!";
?>