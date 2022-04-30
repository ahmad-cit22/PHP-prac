<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php practice 5</title>
</head>

<body>
    <h2>PHP problem solving</h2>

    <?php

    echo "<h3>PHP While loop practice</h3>"; // printing integers 1 to 50
    $num = 1;
    while ($num <= 50) {
        echo $num . "#";
        $num++;
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    

    echo "<h3>PHP For loop practice</h3>"; // printing even numbers 
    for ($num = 2; $num <= 100; $num += 2) {
        echo $num . "@";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";


    echo "<h3>PHP For loop practice</h3>"; // printing odd numbers
    for ($num = 1; $num <= 100; $num += 2) {
        echo $num . "<br>";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";


    echo "<h3>PHP Switch statement practice</h3>"; // detecting vowel or consonant
    $char = "O";
    switch ($char) {
        case "a":
            echo "The character is a Vowel.";
            break;
        case "e":
            echo "The character is a Vowel.";
            break;
        case "i":
            echo "The character is a Vowel.";
            break;
        case "o":
            echo "The character is a Vowel.";
            break;
        case "u":
            echo "The character is a Vowel.";
            break;
        case "A":
            echo "The character is a Vowel.";
            break;
        case "E":
            echo "The character is a Vowel.";
            break;
        case "I":
            echo "The character is a Vowel.";
            break;
        case "O":
            echo "The character is a Vowel.";
            break;
        case "U":
            echo "The character is a Vowel.";
            break;
        default:
            echo "The character is a Consonant.";
            break;
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "<h3>PHP Foreach loop practice</h3>";

    $arrOne = array(1, 2, 3, 4, 5);
    foreach ($arrOne as $x => $val) {
        echo $x + 2 . "=" . $val * 3 . "<br>";
    }

    echo "<br>";



    ?>



</body>

</html>