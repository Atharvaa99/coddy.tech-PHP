<?php
// Read input for three tasks
$task1_description = trim(fgets(STDIN));
$task1_status = trim(fgets(STDIN)) == "true" ? true : false ;
$task2_description = trim(fgets(STDIN));
$task2_status = trim(fgets(STDIN)) == "true" ? true : false ;
$task3_description = trim(fgets(STDIN));
$task3_status = trim(fgets(STDIN)) == "true" ? true : false ;

// TODO: Write your code here
$status1 = $task1_status == "true" ? "completed" : "pending";
$status2 = $task2_status == "true" ? "completed" : "pending";
$status3 = $task3_status == "true" ? "completed" : "pending";

$tasks = [
    [
        "description" => $task1_description,
        "completed" => $status1
    ],
    [
        "description" => $task2_description,
        "completed" => $status2
    ],
    [
        "description" => $task3_description,
        "completed" => $status3
    ]

];

echo "Total tasks: " . count($tasks) . "\n";
echo "Task 0: " . $tasks[0]["description"] . " - Status: " . $tasks[0]["completed"] . "\n";
echo "Task 1: " . $tasks[1]["description"] . " - Status: " . $tasks[1]["completed"] . "\n";
echo "Task 2: " . $tasks[2]["description"] . " - Status: " . $tasks[2]["completed"] . "\n";

?>