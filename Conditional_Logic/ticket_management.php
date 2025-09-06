<?php
// Cinema pricing structure
$adultPrice = 12;
$childPrice = 8;
$seniorPrice = 9;
$weekendSurcharge = 3;
$premiumSeatSurcharge = 5;
$adultAgeThreshold = 18;
$seniorAgeThreshold = 65;

// Read input
$age = intval(trim(fgets(STDIN)));
$dayType = trim(fgets(STDIN));
$seatType = trim(fgets(STDIN));
$occupancy = intval(trim(fgets(STDIN)));
$customerName = trim(fgets(STDIN));


// 1. Determine base price using if...elseif...else based on age
if ($age < 18){
    $basePrice = $childPrice;
}
elseif ($age >= 18 && $age <= 64){
    $basePrice = $adultPrice;
}
else{
    $basePrice = $seniorPrice;
}

// 2. Apply weekend surcharge using ternary operator
$surcharge = $dayType == "weekend" ? $weekendSurcharge : 0; 

// 3. Handle premium seat surcharge using null coalescing operator
$seat = $seatType ?? "standard";
$premuim = $seat == "premium" ? $premiumSeatSurcharge : 0;

// 4. Determine availability status using switch statement
switch (true){
    case $occupancy >= 0 && $occupancy <=50:
        $availabilityStatus = "High availability";
        break;
    case $occupancy >= 51 && $occupancy <=80:
        $availabilityStatus = "Medium availability";
        break;
    case $occupancy >= 81 && $occupancy <=99:
        $availabilityStatus = "Low availability";
        break;
    default:
        $availabilityStatus = "Sold out";
        break;
}

// 5. Calculate final price
$finalPrice = $basePrice + $surcharge + $premuim;
// Output the result
echo "$customerName - Age: $age, Base: $$basePrice, Total: $$finalPrice, Status: $availabilityStatus";
?>