<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Strings</title>
</head>
<body>
    <h2>Modifying Strings</h2>
    <?php
    $justname = "Hello My Sunshine!";
    $y = explode(" ", $justname);
    echo strtoupper($justname) ."<br>"; //uppercase functions
    echo strtolower($justname) ."<br>"; //lowercase functions
    echo str_replace("World", "Aiman", $justname) ."<br>"; //function to replace other strings
    echo strrev($justname) ."<br>"; //function to reverse a string
    echo trim($justname) ."<br>"; //remove any whitespace from the beginning.

    //use print_r() function to display the result:
    print_r($y);
    /* 
    result:
    Array ( [0] => Hello [1] => My [2] => Sunshine! )
    */
    ?>
</body>
</html>