<?php
// Read inputs
$customerName = trim(fgets(STDIN));
$productName = trim(fgets(STDIN));
$orderNumber = trim(fgets(STDIN));

// Email template
$emailTemplate = "Dear [CUSTOMER], thank you for purchasing [PRODUCT]. Your order [ORDER] has been confirmed.";

// TODO: Write your code here
$step1 = str_replace("[CUSTOMER]",$customerName,$emailTemplate);
$step2 = str_replace("[PRODUCT]",$productName,$step1);
$finalEmail = str_replace("[ORDER]",$orderNumber,$step2);

// Output the final email
echo $finalEmail;
?>