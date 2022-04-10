<?php

//! #1 if...else...elseif Statements and concatenation practice:

// $gotMark = 101;
// $strOne = "You've got GPA ";
// $strTWo = "<span style= 'color: red;'>You're failed!</span>";
// $strThree = "You should study more.";
// $strFour = "<span style= 'color: red;'>Invalid Input!</span>";

// if ($gotMark >= 80 && $gotMark <= 100) {
//     echo "Great! " . $strOne . "5.00";
// } else if ($gotMark >= 70 && $gotMark < 80) {
//     echo "Not Bad. " . $strOne . "4.00";
// } else if ($gotMark >= 60 && $gotMark < 70) {
//     echo $strOne . "3.50";
// } else if ($gotMark >= 50 && $gotMark < 60) {
//     echo $strOne . "3.00" . "<br>" . $strThree;
// } else if ($gotMark >= 40 && $gotMark < 50) {
//     echo $strOne . "2.50" . "<br>" . $strThree;
// } else if ($gotMark >= 33 && $gotMark < 40) {
//     echo $strOne . "2.00" . "<br>" . $strThree;
// } else if ($gotMark >= 0 && $gotMark < 33) {
//     echo $strTWo . "<br>" . $strThree;
// } else {
//     echo $strFour;
// }

//! #2 Nested if...else Statements Practice:
/*
$gender = "Male";
$occupation = "Student";
$homeTown = "Dhaka";
$education = "HSC";
$religion = "Isam";
$location = "BD";
$eduBackground = "Science";
$age = 15;

$strOne = "<h1 style= 'color: green;'>Congratulations! You have fulfilled all the conditions, so you can participate in this.</h1>";
$strTwo = "<h1 style= 'color: red;'>So you can't participate.</h1>";

if ($gender === "Male") {
    if ($occupation === "Student") {
        if ($homeTown === "Dhaka") {
            if ($education === "HSC") {
                if ($religion === "Islam") {
                    if ($location === "BD") {
                        if ($eduBackground === "Science") {
                            if ($age >= 15) {
                                echo $strOne;
                            } else {
                                echo "<h1>Sorry! Your age is not enough.</h1>" . $strTwo;
                            }
                        } else {
                            echo "<h1>Sorry! Your educational background is not ok.</h1>" . $strTwo;
                        }
                    } else {
                        echo "<h1>Sorry! Your location is not ok.</h1>" . $strTwo;
                    }
                } else {
                    echo "<h1>Sorry! Your religion is not ok.</h1>" . $strTwo;
                }
            } else {
                echo "<h1>Sorry! Your educational qualification is not ok.</h1>" . $strTwo;
            }
        } else {
            echo "<h1>Sorry! Your hometown is not ok.</h1>" . $strTwo;
        }
    } else {
        echo "<h1>Sorry! Your occupation is not ok.</h1>" . $strTwo;
    }
} else {
    echo "<h1>Sorry! Your gender is not ok.</h1>" . $strTwo;
}
*/

//! even or odd number checking (Another If else statement practice)

$a = 10;
$b = 30;
$c = 50;
$d = 70;
$e = 90;
$str1 = "All are even numbers.";
$str2 = " is not an even number.";

if ($a % 2 === 0) {
    if ($b % 2 === 0) {
        if ($c % 2 === 0) {
            if ($d % 2 === 0) {
                if ($e % 2 === 0) {
                    echo $str1;
                } else {
                    echo $e . $str2;
                }
                
            } else {
                echo $d . $str2;
            }
            
        } else {
            echo $c . $str2;
        }
        
    } else {
        echo $b . $str2;
    }
    
} else {
    echo $a . $str2;
}

echo "<br>";



//! A program that checks two integers and prints "true" if one of the two numbers is 100 or if the sum of the two numbers is 100. (Another If else statement practice)

$num1 = 10;
$num2 = 100;

if ($num1 === 100 || $num2 === 100 || $num1 + $num2 === 100) {
    echo "true";
} else {
    echo "false";
}



?>
