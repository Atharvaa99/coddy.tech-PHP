<?php
// Read input
$username = trim(fgets(STDIN));
$emailPreference = trim(fgets(STDIN));
$phonePreference = trim(fgets(STDIN));

// TODO: Write your code here
// Complete variables based on the inputs
$email = ($emailPreference === "provided" ? "user@example.com" : null  );
$phone = ($phonePreference === "provided" ? "555-0123" : null  );
$profileComplete = false;

// Output the profile information
echo "Username: " . $username . "\n";
echo "Email: " . $email . "\n";
echo "Phone: " . $phone . "\n";
echo "Profile Complete: " . ($profileComplete ? 'true' : 'false') . "\n";
?>