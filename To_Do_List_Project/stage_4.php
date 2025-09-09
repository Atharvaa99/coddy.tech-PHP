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
        "completed" => false
    ]
];
// Read input for three tasks
$taskIndex = (int)(fgets(STDIN));
$completionStatus = trim(fgets(STDIN));
$updateStatus = $completionStatus == "true"? true : false ;
$tasks[$taskIndex]["completed"] = $updateStatus;
$status1 = $tasks[0]["completed"] ? "completed" : "pending";
$status2 = $tasks[1]["completed"] ? "completed" : "pending";
$status3 = $tasks[2]["completed"] ? "completed" : "pending";
$status4 = $tasks[3]["completed"] ? "completed" : "pending";
$statusChanged = $completionStatus == "true" ? "completed" : "pending"; 
$completedCount = 0;
$pendingCount = 0;
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
if($status3 == "completed"){
    $completedCount += 1;
}else{
    $pendingCount += 1;
}
if($status4 == "completed"){
    $completedCount += 1;
}else{
    $pendingCount += 1;
}
//$displayDescription = trim(fgets(STDIN));

// TODO: Write your code here

//if($displayDescription == "detailed"){
    echo "Updated task " . $taskIndex . ": " . $tasks[$taskIndex]["description"] . " - Status changed to ". $statusChanged . "\n";
    echo "Task 0: " . $tasks[0]["description"] . " - Status: " . $status1 . "\n";
    echo "Task 1: " . $tasks[1]["description"] . " - Status: " . $status2 . "\n";
    echo "Task 2: " . $tasks[2]["description"] . " - Status: " . $status3 . "\n";
    echo "Task 3: " . $tasks[3]["description"] . " - Status: " . $status4 . "\n";
    echo "Total tasks: " . count($tasks) . ", Completed: " .$completedCount. ", Pending: " . $pendingCount;

//}
/*elseif($displayDescription == "simple"){
    echo "0: " . $tasks[0]["description"] . "\n";
    echo "1: " . $tasks[1]["description"] . "\n";
    echo "2: " . $tasks[2]["description"] . "\n";
    echo "Displayed " . count($tasks) . " tasks in simple format\n";
}*/

?>