<?php
// Department codes
$electronicsCode = "ELEC";
$clothingCode = "CLTH";
$booksCode = "BOOK";
$homeCode = "HOME";
$sportsCode = "SPRT";

// Read input
$productCode = trim(fgets(STDIN));
$customerName = trim(fgets(STDIN));

// TODO: Write your code here
switch ($productCode){
    case "ELEC":
        $message = "$customerName, visit Electronics Department - Aisle 1-3, Phone: 555-0101";
        break;
    case "CLTH":
        $message = "$customerName, visit Clothing Department - Aisle 4-6, Phone: 555-0102";
        break;
    case "BOOK":
        $message = "$customerName, visit Books Department - Aisle 7-9, Phone: 555-0103";
        break;
    case "SPRT":
        $message = "$customerName, visit Sports Department - Aisle 13-15, Phone: 555-0105";
        break;
      case "HOME":
        $message = "$customerName, visit Home & Garden Department - Aisle 10-12, Phone: 555-0104";
        break;
    default:
        $message = "$customerName, unknown product code. Please visit Customer Service.";
        break;
}

// Output the result
echo $message;
?>