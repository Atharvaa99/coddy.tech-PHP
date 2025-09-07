<?php
// Employee record
$employee = [
    "id" => 1001,
    "name" => "Sarah Wilson",
    "department" => "Marketing",
    "salary" => 55000,
    "position" => "Junior Analyst",
    "email" => "sarah.wilson@company.com"
];

// Read inputs
$newDepartment = trim(fgets(STDIN));
$newPosition = trim(fgets(STDIN));
$newSalary = trim(fgets(STDIN));

// TODO: Write your code here to update the employee record
$employee["department"] = $newDepartment; 
$employee["position"] = $newPosition; 
$employee["salary"] = $newSalary; 
// Output the updated employee information
echo "Employee Update Complete:\n";
echo "Name: " . $employee["name"] . "\n";
echo "Department: " . $employee["department"] . "\n";
echo "Position: " . $employee["position"] . "\n";
echo "Salary: " . $employee["salary"];
?>