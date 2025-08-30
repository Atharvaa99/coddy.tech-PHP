<?php
// Read input
$username = trim(fgets(STDIN));
$password = trim(fgets(STDIN));
$confirmPassword = trim(fgets(STDIN));

// TODO: Write your code here to calculate password lengths and create the required variables
$passwordLength = strlen($password);
$confirmLength = strlen($confirmPassword);

// Output the results
echo "Username: " . $username . "\n";
echo "Password Length: " . $passwordLength . "\n";
echo "Confirm Password Length: " . $confirmLength . "\n";
?>