<?php
$username = "john";
$theme = "dark";
$isCustomized = ($username != "guest") && ($theme != "default");
// Don't change the line below
echo "Settings customized: " . ($isCustomized ? "true" : "false");
?>