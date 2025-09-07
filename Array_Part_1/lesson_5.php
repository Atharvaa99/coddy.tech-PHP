<?php
// Initial shopping cart
$cart = ["bread", "milk", "eggs"];

// Read the three new items to add
$item1 = trim(fgets(STDIN));
$item2 = trim(fgets(STDIN));
$item3 = trim(fgets(STDIN));

// TODO: Add the three new items to the cart using empty square brackets syntax
$cart[] = $item1;
$cart[] = $item2;
$cart[] = $item3;
$count = count($cart);
// TODO: Display the shopping cart and total count in the required format
echo "Shopping cart: $cart[0], $cart[1], $cart[2], $cart[3], $cart[4], $cart[5]\n";
echo 'Total items: ' . $count
?>