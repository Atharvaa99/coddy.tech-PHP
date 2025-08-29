<?php
// Read inputs
$initialStock = intval(fgets(STDIN));
$itemsSold = intval(fgets(STDIN));
$itemsRestocked = intval(fgets(STDIN));

// TODO: Write your code here to calculate the final stock
$finalStock = ($initialStock - $itemsSold) + $itemsRestocked;
// Output the results
echo "Initial Stock: " . $initialStock . "\n";
echo "Items Sold: " . $itemsSold . "\n";
echo "Items Restocked: " . $itemsRestocked . "\n";
echo "Final Stock: " . $finalStock . "\n";
?>