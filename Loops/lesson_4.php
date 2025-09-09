<?php
// Read input
$student_name = trim(fgets(STDIN));
$grade_data = trim(fgets(STDIN));

// Split the grade data into subjects and scores
$grades = explode(",", $grade_data);

$score = [];
$avg = [];

echo "Grade Report for $student_name:" . PHP_EOL;

foreach ($grades as $grade) {
    $subject = explode(":", $grade);
    $subject_name = trim($subject[0]);
    $subject_score = (int)trim($subject[1]);

    $score[$subject_name] = $subject_score;
    $avg[] = $subject_score; 
}

foreach ($score as $key => $value) {
    echo "$key: $value%" . PHP_EOL;
}

$res = intval(array_sum($avg));   
$count = count($avg);     
$average = round($res / $count);

echo "Average Grade: " . round($average, 2) . "%" . PHP_EOL;
?>

