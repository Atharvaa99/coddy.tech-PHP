<?php
// Initial todo list
$todos = ["study PHP", "buy groceries"];

// Read inputs
$newTask1 = trim(fgets(STDIN));
$newTask2 = trim(fgets(STDIN));
$indexToModify = (int)(fgets(STDIN));
$updatedTask = trim(fgets(STDIN));

$todos[] = $newTask1;
$todos[] = $newTask2;
$todos[$indexToModify] = $updatedTask;
$todos[] = "review progress";

// Output the results
echo "Final todo list: " . implode(", ", $todos) . "\n";
echo "Total tasks: " . count($todos);
?>