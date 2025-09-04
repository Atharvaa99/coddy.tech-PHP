<?php
$attendance = 85;
$grade = 75;
$completedProject = true;
$passes = ($attendance >= 80) && ($grade >= 70) && ($completedProject == true);
// Don't change the line below
echo "Student passes: " . ($passes ? "true" : "false");
?>