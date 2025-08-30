<?php
// Read inputs
$input1 = trim(fgets(STDIN));
$input2 = trim(fgets(STDIN));
$input3 = trim(fgets(STDIN));
$input4 = trim(fgets(STDIN));

// TODO: Create variables with appropriate data types and assign the inputs
$studentId = $input1;
$studentName = $input2;
$currentGrade = $input3;
$gpa = (float)$input4;

// Output the student information in the required format
echo "Student ID: " . $studentId . "\n";
echo "Name: " . $studentName . "\n";
echo "Grade: " . $currentGrade . "\n";
echo "GPA: " . $gpa;

?>