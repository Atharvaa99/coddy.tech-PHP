<?php
// Read input
$basePrice = floatval(fgets(STDIN));
$taxRate = floatval(fgets(STDIN));

// TODO: Write your code here to calculate the final price
$finalPrice = ($basePrice * $taxRate) + $basePrice;
// Output the results
echo "Base Price: " . $basePrice . "\n";
echo "Tax Rate: " . $taxRate . "\n";
echo "Final Price: " . $finalPrice . "\n";
?>