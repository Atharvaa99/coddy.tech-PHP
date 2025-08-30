<?php
// Read inputs
$productName = trim(fgets(STDIN));
$customerName = trim(fgets(STDIN));
$discount = trim(fgets(STDIN));
$storeName = trim(fgets(STDIN));

// TODO: Create the three interpolated string messages below
$personalGreeting = "Hi $customerName, check out our latest offer!";
$productOffer = "Get $discount% off on $productName today!";
$storeSignature = "Visit us at $storeName for more amazing deals.";

// Output the messages
echo "Personal Greeting: $personalGreeting\n";
echo "Product Offer: $productOffer\n";
echo "Store Signature: $storeSignature\n";
?>