<?php
// Read input
$store_name = trim(fgets(STDIN));
$product_list = trim(fgets(STDIN));

// Convert product list to array
$products = explode(',', $product_list);

// TODO: Write your code here to display the inventory using foreach loop
echo $store_name . " Inventory:".PHP_EOL;
foreach ($products as $product){
    echo "- ". $product . "\n";
}
echo "Total products: " . count($products);
?>