<?php
$orderTotal = 35;
$isPremium = true;
$hasDiscountCode = false;
$freeShipping = ($orderTotal >= 50) || ($isPremium == true) || ($hasDiscountCode == true);
// Don't change the line below
echo "Free shipping: " . ($freeShipping ? "true" : "false");
?>