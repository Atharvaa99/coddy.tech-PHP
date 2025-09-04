<?php
$temperature = 20;
$windSpeed = 8;
$isIdeal = ($temperature > 15) && ($windSpeed < 10);
// Don't change the line below
echo "Ideal weather: " . ($isIdeal ? "true" : "false");
?>