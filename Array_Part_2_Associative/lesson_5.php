<?php
// User permissions array
$userPermissions = [
    "read" => true,
    "write" => false,
    "admin" => true,
    "delete" => false
];

// Read input
$permission = trim(fgets(STDIN));
$action = trim(fgets(STDIN));

// TODO: Write your code here
if (array_key_exists($permission,$userPermissions)){
    echo "Access granted for $action: $permission permission found";
}
else{
    echo "Access denied for $action: $permission permission not found";
}

// Output the result
echo $message;
?>