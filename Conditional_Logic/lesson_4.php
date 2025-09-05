<?php
// Account settings
$premiumAccountType = "premium";
$standardAccountType = "standard";
$activeStatus = "active";
$inactiveStatus = "inactive";

// Read input
$accountType = trim(fgets(STDIN));
$activityStatus = trim(fgets(STDIN));
$username = trim(fgets(STDIN));

// TODO: Write your code here
// Use ternary operators to create the account level message and activity status message
$accountMessage = $accountType == $premiumAccountType ? "Premium Member" : "Standard Member";
$activityMessage = $activityStatus == $activeStatus ? "Currently Online" : "Currently Offline";
$result = $username . " - " . $accountMessage . " - " . $activityMessage;
// Output the result
echo $result;
?>