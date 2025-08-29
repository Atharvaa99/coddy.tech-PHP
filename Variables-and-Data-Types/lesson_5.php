<?php
// Read input
$verificationStatus = trim(fgets(STDIN));
$premiumStatus = trim(fgets(STDIN));
$emailPreference = trim(fgets(STDIN));

// TODO: Write your code here
// Convert string inputs to boolean variables
$isVerified = ($verificationStatus === "true");
$isPremium = ($premiumStatus === "true");
$emailNotifications = ($emailPreference === "true");

// Output the results
echo "Account Verified: " . ($isVerified ? "true" : "false") . "\n";
echo "Premium Member: " . ($isPremium ? "true" : "false") . "\n";
echo "Email Notifications: " . ($emailNotifications ? "true" : "false") . "\n";

?>