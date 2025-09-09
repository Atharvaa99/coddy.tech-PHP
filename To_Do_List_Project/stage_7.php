<?php
$collections = trim(fgets(STDIN));
if ( $collections === "empty"){
    $tasks = [];
    echo "No tasks available. Your to-do list is empty!". PHP_EOL;
    echo "Total tasks: 0".PHP_EOL;
}
elseif ($collections === "populated"){
    $tasks = [
        [
            "description" => "Buy groceries",
            "completed" => false
        ],
        [
            "description" => "Walk the dog", 
            "completed" => true
        ]
    ];
    $status1 = $tasks[0]["completed"] ? "completed" : "pending";
    $status2 = $tasks[1]["completed"] ? "completed" : "pending";
    echo "Task 0: " . $tasks[0]["description"] . " - Status: " . $status1 . "\n";
    echo "Task 1: " . $tasks[1]["description"] . " - Status: " . $status2 . "\n";
    if($status1 == "completed"){
        $completedCount += 1;
        }else{
        $pendingCount += 1;
    }
    if($status2 == "completed"){
        $completedCount += 1;
        }else{
        $pendingCount += 1;
    }
    echo "Total tasks: " . count($tasks) . ", Completed: " .$completedCount. ", Pending: " . $pendingCount;
}
?>