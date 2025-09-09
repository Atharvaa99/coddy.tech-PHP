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
    [
        "description" => "Read a book",
        "completed" => "pending"
    ]
];
// Read input for three tasks
$displayDescription = trim(fgets(STDIN));

// TODO: Write your code here

if($displayDescription == "detailed"){
    echo "Task 0: " . $tasks[0]["description"] . " - Status: " . $tasks[0]["completed"] . "\n";
    echo "Task 1: " . $tasks[1]["description"] . " - Status: " . $tasks[1]["completed"] . "\n";
    echo "Task 2: " . $tasks[2]["description"] . " - Status: " . $tasks[2]["completed"] . "\n";
    echo "Displayed " . count($tasks) . " tasks in detailed format\n";
}
elseif($displayDescription == "simple"){
    echo "0: " . $tasks[0]["description"] . "\n";
    echo "1: " . $tasks[1]["description"] . "\n";
    echo "2: " . $tasks[2]["description"] . "\n";
    echo "Displayed " . count($tasks) . " tasks in simple format\n";
}

?>