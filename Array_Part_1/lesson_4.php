<?php
// Read all 13 inputs (4 books + 6 movies + 3 games)
$input1 = trim(fgets(STDIN));
$input2 = trim(fgets(STDIN));
$input3 = trim(fgets(STDIN));
$input4 = trim(fgets(STDIN));
$input5 = trim(fgets(STDIN));
$input6 = trim(fgets(STDIN));
$input7 = trim(fgets(STDIN));
$input8 = trim(fgets(STDIN));
$input9 = trim(fgets(STDIN));
$input10 = trim(fgets(STDIN));
$input11 = trim(fgets(STDIN));
$input12 = trim(fgets(STDIN));
$input13 = trim(fgets(STDIN));

// TODO: Create the three arrays using the inputs above
$books = [$input1, $input2, $input3, $input4];
$movies = [$input5, $input6, $input7, $input8, $input9, $input10];  
$games = [$input11, $input12, $input13];

$booksCount = count($books);
$moviesCount = count($movies);
$gamesCount = count($games);

// TODO: Determine which collection has the most items
$max1 = $booksCount > $moviesCount ? $books : $movies;
$largest = $booksCount > $moviesCount ? "Books" : "Movies";
$max2= count($max1) > $gamesCount ? $max1 : $games;
$largestCollection= $max1 > $gamesCount ? $largest : "Games";
$maxCount = count($max2);
// Output the results in the required format
echo "Books: " . $booksCount . " items\n";
echo "Movies: " . $moviesCount . " items\n";
echo "Games: " . $gamesCount . " items\n";
echo "Largest collection: " . $largestCollection . " with " . $maxCount . " items";
?>