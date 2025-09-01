<?php
// Read inputs
$score = intval(fgets(STDIN));
$bonus = intval(fgets(STDIN));
$penalty = intval(fgets(STDIN));
$multiplier = intval(fgets(STDIN));
$lives = intval(fgets(STDIN));

// TODO: Write your code here
echo "Initial Score: " . $score ."\n";
$score += $bonus;
echo "After Bonus: " . $score ."\n";
$score -= $penalty;
echo "After Penalty: " . $score ."\n";
$score *= $multiplier;
echo "After Multiplier: " . $score ."\n";
$score /= $lives;
echo "Final Score: " . $score ."\n";


?>