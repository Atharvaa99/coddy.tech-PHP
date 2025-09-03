<?php
$userID = 42;
$userStatus = "active";
$isVerified = ($userID === 42) && ($userStatus === "active");
// Don't change the line below
echo "User verified: " . ($isVerified ? "true" : "false");
?>