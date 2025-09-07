<?php
// Initial customer profile
$customer = [
    "name" => "Alex Thompson",
    "email" => "alex@email.com",
    "city" => "Boston"
];

// Read inputs
$phone = trim(fgets(STDIN));
$age = trim(fgets(STDIN));
$membership = trim(fgets(STDIN));
$purchases = trim(fgets(STDIN));

// TODO: Add the new fields to the customer array
$customer["phone"] = $phone;
$customer["age"] = (int)$age;
$customer["membership"] = $membership;
$customer["purchases"] = (int)$purchases;

// Display the complete customer profile in the required format
echo "Complete Customer Profile:\n";
echo "Name: " . $customer["name"] . "\n";
echo "Email: " . $customer["email"] . "\n";
echo "City: " . $customer["city"] . "\n";
echo "Phone: " . $customer["phone"] . "\n";
echo "Age: " . $customer["age"] . "\n";
echo "Membership: " . $customer["membership"] . "\n";
echo "Purchases: " . $customer["purchases"];

?>