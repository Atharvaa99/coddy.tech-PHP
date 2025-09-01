<?php
// Read inputs
$initialValue = trim(fgets(STDIN));
$firstDecrement = trim(fgets(STDIN));
$secondDecrement = trim(fgets(STDIN));

// Convert to integers and create variables
$timer = intval($initialValue);
$firstDecrement = intval($firstDecrement);
$secondDecrement = intval($secondDecrement);

// TODO: Display current timer using post-decrement
echo "Initial Display: $timer\n";
$timer--;
echo "After Initial: $timer\n";

// TODO: Apply exactly 3 decrements using pre-decrement
// Use --$timer exactly 3 times
--$timer;
--$timer;
--$timer;
echo "After First: $timer\n";
// TODO: Apply exactly 2 decrements using post-decrement
// Use $timer-- exactly 2 times
$timer--;
$timer--;


// TODO: Display results in the required format
echo "Final Timer: $timer";
?>