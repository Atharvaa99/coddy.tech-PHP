<?php
$tasks = [
    [
        "description" => "Buy groceries",
        "completed" => false
    ],
    [
        "description" => "Walk the dog", 
        "completed" => true
    ],
    [
        "description" => "Read a book",
        "completed" => false
    ],
    [
        "description" => "Exercise",
        "completed" => true
    ],
    [
        "description" => "Clean house",
        "completed" => false
    ]
];
$removeIndex = (int)(fgets(STDIN));
echo "Removed task: " . $tasks[$removeIndex]["description"] . "\n";

unset($tasks[$removeIndex]);
$newTasks = array_values($tasks);

$status1 = $newTasks[0]["completed"] ? "completed" : "pending";
$status2 = $newTasks[1]["completed"] ? "completed" : "pending";
$status3 = $newTasks[2]["completed"] ? "completed" : "pending";
$status4 = $newTasks[3]["completed"] ? "completed" : "pending";

echo "Task 0: " . $newTasks[0]["description"] . " - Status: " . $status1 . "\n";
echo "Task 1: " . $newTasks[1]["description"] . " - Status: " . $status2 . "\n";
echo "Task 2: " . $newTasks[2]["description"] . " - Status: " . $status3 . "\n";
echo "Task 3: " . $newTasks[3]["description"] . " - Status: " . $status4 . "\n";

$remainingCount = count($newTasks);
echo "Remaining tasks: " . $remainingCount;
?>