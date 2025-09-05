<?php
// Grading thresholds
$excellentThreshold = 90;
$goodThreshold = 80;
$satisfactoryThreshold = 70;
$passingThreshold = 60;

// Read input
$score = intval(fgets(STDIN));
$studentName = trim(fgets(STDIN));

// TODO: Write your code here to determine grade and performance message using if...elseif...else statements
if($score >= $excellentThreshold){
    $grade = "A";
    $performanceMessage = "Excellent performance";
}
elseif($score >= $goodThreshold && $score < $excellentThreshold){
    $grade = "B";
    $performanceMessage ="Good performance";
}
elseif($score < $goodThreshold && $score >= $satisfactoryThreshold){
    $grade = "C";
    $performanceMessage = "Satisfactory performance";
}
elseif($score >= $passingThreshold && $score < $satisfactoryThreshold){
    $grade = "D";
    $performanceMessage = "Needs improvement";
}
else{
    $grade = "F";
    $performanceMessage = "Failed";
}

// Output the result
echo "$studentName: Grade $grade - $performanceMessage";
?>