<?php
// Read input
$firstName = trim(fgets(STDIN));
$lastName = trim(fgets(STDIN));
$companyName = trim(fgets(STDIN));

// TODO: Write your code here to create the four string variables using concatenation
// Create $fullName, $greeting, $companyMessage, and $completeMessage

$fullName = $firstName . " " . $lastName;
$greeting = "Hello, " . $fullName . "!";
$companyMessage = "Welcome to " . $companyName .".";
$completeMessage = $greeting . " " . $companyMessage;

// Output the results
echo "Full Name: " . $fullName . "\n";
echo "Greeting: " . $greeting . "\n";
echo "Company Message: " . $companyMessage . "\n";
echo "Complete Message: " . $completeMessage . "\n";
?>