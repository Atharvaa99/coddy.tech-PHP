<?php
// Temperature safety thresholds
$minSafeTemp = 18;
$maxSafeTemp = 24;
$criticalLowTemp = 10;
$criticalHighTemp = 30;

// Read input
$temperature = intval(fgets(STDIN));
$roomName = trim(fgets(STDIN));

// TODO: Write your code here to check temperature conditions and create appropriate message
if ($temperature < $criticalLowTemp){
    $message = "CRITICAL: $roomName temperature dangerously low at {$temperature}°C";
}
if ($temperature > $criticalHighTemp){
    $message =  "CRITICAL: $roomName temperature dangerously high at {$temperature}°C";
}
if ($temperature >= $criticalLowTemp && $temperature < $minSafeTemp){
    $message = "WARNING: $roomName temperature too cold at {$temperature}°C";
}
if ($temperature <= $criticalHighTemp && $temperature > $maxSafeTemp){
    $message =  "WARNING: $roomName temperature too warm at {$temperature}°C";
}
if ($temperature >= $minSafeTemp && $temperature <= $maxSafeTemp){
    $message = "OK: $roomName temperature normal at {$temperature}°C";
}
// Output the result
echo $message;
?>