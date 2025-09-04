<?php
$isOnline = false;
$maintenanceCompleted = false;
$showAlert = !$isOnline && !$maintenanceCompleted;
// Don't change the line below
echo "Show maintenance alert: " . ($showAlert ? "true" : "false");
?>