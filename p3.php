<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
</head>

<body>
    <h2>HW of Class #3</h2>
    <br>
    <br>
</body>

</html>

<?php

//! A program for detecting a character as vowel or consonant. 
//! It will work for both upper and lower cases.

// $char1 = "A";
// $char1 = strtolower($char1);

// if ($char1 === "a" || $char1 === "e" || $char1 === "i" || $char1 === "o" || $char1 === "u") {
//     echo "The first letter is a Vowel.";
// } else {
//     echo "The first letter is a Consonant.";
// }

// echo "<br>";
// echo "<br>";

// $char2 = "c";
// $char2 = strtolower($char2);

// if ($char2 === "a" || $char2 === "e" || $char2 === "i" || $char2 === "o" || $char2 === "u") {
//     echo "The second letter is a Vowel.";
// } else {
//     echo "The second letter is a Consonant.";
// }

//! PHP Pre-built Functions Practice
//* strlen() : Counting the length of a string

$strOne = "I am a frontend web developer. I can create website templates using HTML, CSS, JS and Bootstrap. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, possimus eaque deserunt quae voluptatibus!";
$strTwo = "Ahmed";
$charCounter = strlen($strOne);

echo "You have written " . $charCounter . " characters and remaining " . (240 - $charCounter) . " characters more.";

echo "<br>";
echo "<br>";

//* str_word_count() : Counts word in a string

echo "You have written " . str_word_count($strOne) . " words.";

echo "<br>";
echo "<br>";

//* strrev() : Reverse a string

echo "Reversed version of '". $strTwo . "' is : '" . strrev($strTwo) . "'";
echo "<br>";
echo "<br>";

//* strtoupper() & strtolower() : Changing the case of a string
$strTwo = strtolower($strTwo);
echo "Lower case - " . $strTwo;
echo "<br>";
echo "<br>";
$strTwo = strtoupper($strTwo);
echo "Upper case - " . $strTwo;
echo "<br>";
echo "<br>";

//* md5() : Password encrypt
$passwordEncrypt = md5($strTwo);
echo "The encryted form of " . $strTwo . " is - " . $passwordEncrypt;
echo "<br>";
echo "<br>";

//* str_split() : split a string into an array
print_r(str_split($strOne));
echo "<br>";
echo "<br>";

//! PHP Constant
define("PI", 3.1416);
echo PI . " is a constant. So its value can't be changed.";
echo "<br>";
echo "<br>";

//**  [Constants can't be re-declared or re-assigned once it is declared. i.e. once they are defined they cannot be changed. A valid constant name starts with a letter or underscore (no $ sign before the constant name).]

//! PHP Array
//* PHP Arrays are declared just like the variables are declared..i.e. with $ sign. Arrays are containers which can contain more than one value. Arrays are printed using the 'print_r()' function.

$arrayOne = [1, 2, 3, 4.55, 5.4, "a", "b", "c", "d", "e"];
print_r($arrayOne);  // prints the whole array
echo "<br>";
echo "<br>";
echo $arrayOne[4]; // prints only the element which is in the specified index number. e.g. [4] here. 
echo "<br>";
echo "<br>";

//* The default index numbers can be changed manually.
$arrayOne = [
    1,
    2,
    30 => 3, // index number of the element '3' is changed here from [2] to [30].
    4,
    5,
    40 => "a",
    "b",
    35 => "c",
    "d",
    "e"
];
print_r($arrayOne); // prints the whole array
echo "<br>";
echo "<br>";
echo $arrayOne[30]; // prints the element '3'.
echo "<br>";
echo "<br>";
echo $arrayOne[43]; // prints the element 'e'.


?>