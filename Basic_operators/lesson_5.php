<?php
// Read inputs
$steps = intval(fgets(STDIN));
$morningSteps = intval(fgets(STDIN));
$afternoonSteps = intval(fgets(STDIN));

// TODO: Display current steps using post-increment
// Use $steps++ to show current value, then display updated value
echo "Initial Display: $steps\n";
$steps++;
echo "After Initial: $steps\n";

// TODO: Add exactly 3 morning steps using pre-increment
// Use ++$steps exactly 3 times
++$steps;
++$steps;
++$steps;
echo "After Morning: $steps\n";

// TODO: Add exactly 2 afternoon steps using post-increment  
// Use $steps++ exactly 2 times
$steps++;
$steps++;

// TODO: Display results in the required format
echo "Final Steps: $steps";
?>g