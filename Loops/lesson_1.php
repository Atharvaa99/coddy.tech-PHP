<?php
// Read input
$start = intval(fgets(STDIN));
$end = intval(fgets(STDIN));
$step = intval(fgets(STDIN));

// TODO: Write your code here to generate the number sequence using a for loop
$generated = 0;
for ($i = $start; $i <= $end; $i += $step){
    echo $i . PHP_EOL;
    $generated ++;
}
// TODO: Display the summary line
echo "Generated $generated numbers from $start to $end with step $step";
?>