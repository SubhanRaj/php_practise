<!-- Strings in PHP -->

<?php

$name = "Subhan";
$age = 19;
echo "$name<br>";

// Now, let's try some string functions in PHP

//  strlen: This gives the length of string

echo "The length of $name's name is ". strlen($name); // We can use '.' to concatenate two strings

// str_word_count : Tell how many words are in string

$sentence = "Hi, myself $name, I'm $age years old, and I study in Btech";

echo "<br>$sentence<br>";
echo  str_word_count($sentence);

// strrev : Reverses a string

echo "<br>".strrev($sentence)



?>
