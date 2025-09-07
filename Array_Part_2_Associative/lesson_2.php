<?php
// Product catalog
$product = [
    "name" => "Wireless Headphones",
    "brand" => "TechSound",
    "price" => 89.99,
    "category" => "Electronics",
    "inStock" => true,
    "rating" => 4.5
];

// Read the three key names
$key1 = trim(fgets(STDIN));
$key2 = trim(fgets(STDIN));
$key3 = trim(fgets(STDIN));


// Output the product summary
echo "Product Summary:\n";
// Add your output statements here
echo $key1 . ": " . $product[$key1]. "\n";
echo $key2 . ": " . $product[$key2]. "\n";
echo $key3 . ": " . $product[$key3]. "\n";
?>