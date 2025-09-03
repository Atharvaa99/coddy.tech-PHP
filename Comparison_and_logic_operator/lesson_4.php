<?php
$age = "25";
$status = 1 ;
$needsValidation = ($age !== 25) && ($status !== true);
// Don't change the line below
echo "Needs validation: " . ($needsValidation ? "true" : "false");
?>