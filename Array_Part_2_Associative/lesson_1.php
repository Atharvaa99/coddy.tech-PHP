<?php
// Read inputs
$firstName = trim(fgets(STDIN));
$lastName = trim(fgets(STDIN));
$age = trim(fgets(STDIN));
$grade = trim(fgets(STDIN));
$subject = trim(fgets(STDIN));

// TODO: Create the associative array $student with the required keys and values
$student = [
    "firstName" =>$firstName,
    "lastName" => $lastName,
    "age" => $age,
    "grade" => $grade,
    "subject" => $subject,
];


// Display the student profile in the required format
echo "Student Profile:\n";
echo "Name: " . $student["firstName"] . " " . $student["lastName"] . "\n";
echo "Age: " . $student["age"] . "\n";
echo "Grade: " . $student["grade"] . "\n";
echo "Favorite Subject: " . $student["subject"];

?>