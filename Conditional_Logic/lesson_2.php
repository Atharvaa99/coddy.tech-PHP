<?php
// Library policies
$minimumAge = 16;
$membershipFee = 25;
$maxBooksAllowed = 5;

// Read inputs
$age = intval(fgets(STDIN));
$feePaid = intval(fgets(STDIN));
$currentBooks = intval(fgets(STDIN));

// TODO: Write your code here to validate membership requirements using if...else statements
if ($age >= 16){
    echo "Age requirement: Eligible\n";
}
else{
    echo "Age requirement: Not eligible\n";
}
if ($feePaid >= 25){
    echo "Membership fee: Paid\n";
}
else{
    echo "Membership fee: Outstanding\n";
}
if ($currentBooks < 5){
    echo "Book borrowing: Available\n";
}
else{
    echo "Book borrowing: Limit reached\n";
}
?>