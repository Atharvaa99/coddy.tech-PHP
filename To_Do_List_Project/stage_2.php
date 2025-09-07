<?php
$tasks = [
    [
        "description" => "Buy groceries",
        "completed" => "pending"
    ],
    [
        "description" => "Walk the dog", 
        "completed" => "completed"
    ],
];
// Read input for three tasks
$task_description = trim(fgets(STDIN));
$task_status = trim(fgets(STDIN)) ;

// TODO: Write your code here
$status = $task_status == "true" ? "completed" : "pending";
$tasks[2]["description"] = $task_description;
$tasks[2]["completed"] = $status;

echo "Total tasks: " . count($tasks) . "\n";
echo "Task 0: " . $tasks[0]["description"] . " - Status: " . $tasks[0]["completed"] . "\n";
echo "Task 1: " . $tasks[1]["description"] . " - Status: " . $tasks[1]["completed"] . "\n";
echo "Task 2: " . $tasks[2]["description"] . " - Status: " . $tasks[2]["completed"] . "\n";

?>