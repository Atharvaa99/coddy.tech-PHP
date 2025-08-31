<?php
// Read inputs
$filename = trim(fgets(STDIN));
$startPos = intval(trim(fgets(STDIN)));
$length = intval(trim(fgets(STDIN)));

// TODO: Write your code here
$fileType = substr($filename,0,3);
$year = substr($filename,5,4);
$customExtract = substr($filename,$startPos,$length);

// Output the results
echo "Filename: " . $filename . "\n";
echo "File Type: " . $fileType . "\n";
echo "Year: " . $year . "\n";
echo "Custom Extract: " . $customExtract . "\n";
?>