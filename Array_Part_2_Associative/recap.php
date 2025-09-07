<?php
// Initial dictionary
$dictionary = [
    "algorithm" => "A step-by-step procedure for solving a problem",
    "variable" => "A storage location with an associated name",
    "function" => "A reusable block of code that performs a specific task"
];

// Read inputs
$newWord = trim(fgets(STDIN));
$newDefinition = trim(fgets(STDIN));
$existingWord = trim(fgets(STDIN));
$newDefinitionForExisting = trim(fgets(STDIN));
$lookupWord = trim(fgets(STDIN));

// TODO: Write your code here

$dictionary[$newWord] = $newDefinition;

$dictionary[$existingWord] = $newDefinitionForExisting;

$lookUpResult = array_key_exists($lookupWord,$dictionary) ? "found" : "not found";

echo "Dictionary Updated Successfully!\n\n";
echo "Complete Dictionary:\n";
echo  "algorithm" . ": " . $dictionary["algorithm"] . "\n";
echo  "variable" . ": " . $dictionary["variable"] . "\n";
echo  "function" . ": " . $dictionary["function"] .  "\n";
echo $newWord . ": " . $dictionary[$newWord] .  "\n\n";

echo "Word Lookup Result:\n";
echo "$lookupWord: $lookUpResult"
?>