<?php

// If-else in PHP
// If else is used to execute one statement or another statement.
// It is used to execute one statement if a condition is true and another statement if the condition is false.



$year = 352142;
echo "<br>";
echo "The year is $year";
if ($year % 4 == 0) {
    echo "<br>$year is a Leap Year";
} else {
    echo "<br>$year is not a Leap Year";
}
echo "<br>";
$age = 18;

if ($age >= 18) {
    echo "You are eligible to vote";
} elseif ($age > 60 && $age < 100) {
    echo "You are eligible to vote but you are not eligible to be a senior citizen";
} else {
    echo "You are not eligible to vote";
}
