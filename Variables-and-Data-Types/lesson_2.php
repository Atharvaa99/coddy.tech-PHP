<?php
// TODO: Write your code here
// Ask for the user's name
echo "What is your name? ";
$userName = trim(fgets(STDIN));

// Ask for the user's age
echo "How old are you? ";
$userAge = trim(fgets(STDIN));

// Display the personalized message
echo "Nice to meet you, " . $userName . "! You are " . $userAge . " years old.";
?>