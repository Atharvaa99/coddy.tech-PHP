<?php
// Default system settings
$defaultTheme = "light";
$defaultLanguage = "English";
$defaultNotifications = "enabled";

// Read user inputs
$userTheme = trim(fgets(STDIN));
$userLanguage = trim(fgets(STDIN));
$userNotifications = trim(fgets(STDIN));
$username = trim(fgets(STDIN));

// TODO: Write your code here
$theme = $userTheme == "null" ? null : $userTheme; 
$language = $userLanguage == "null" ? null : $userLanguage; 
$notification = $userNotifications == "null" ? null : $userNotifications;

$finalTheme = $theme ?? $defaultTheme ;
$finalLanguage = $language ?? $defaultLanguage;
$finalNotification = $notification ?? $defaultNotifications;

$finalMessage = "User $username settings: Theme=$finalTheme, Language=$finalLanguage, Notifications=$finalNotification";

// Output the result
echo $finalMessage;
?>