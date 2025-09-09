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
    ],
    [
        "description" => "Call mom",
        "completed" => true
    ]
];

$filterWord = trim(fgets(STDIN));
$filter = $filterWord == "completed" ? true : false ;
$index = 0;
$count = 0;
echo "Showing $filterWord tasks:" . PHP_EOL;
foreach ($tasks as $task ){
    if($task["completed"] === $filter){
        echo "Task ". $index . ": " . $task["description"] . PHP_EOL;
        $count ++;
    }
    $index ++;
}
echo "Found " . $count . " " .$filterWord . " tasks out of " . count($tasks) . " total tasks";

?>