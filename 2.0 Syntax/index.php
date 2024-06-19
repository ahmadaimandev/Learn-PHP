<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Syntax</title>
</head>
<body>
    <?php

    //php code goes inside here
    ECHO "Hello World <br>";
    EcHo "Hello World <br>";
    eCho "Hello World <br>";
    echo "<br>";
    //echo keyword are not case sensitive

    //php variable case sensitive//
    $color = "red";
    $Fname = "Ahmad";
    $Lname = "Aiman";
    echo "My car is " .$color. "<br>";
    echo "My name is " .$Fname. " " .$Lname. "<br>";
    echo "<br>";
    //echo "My house is " .$COLOR. "<br>"; //COLOR variable =/= color
    //echo "My boat is " .$coLOR. "<br>"; //coLOR variable =/= color
    //purpose of the dot is simply used to join pieces of text together

    //Comment in PHP
    $singleLine_comment = "use (// or #) to create single line comment";
    $multiLine_comment = "/*This is multiline comment*/";

    echo "single-line comment " .$singleLine_comment. "<br>"; 
    echo "multi-line comment " .$multiLine_comment. "<br>"; 
    ?>
</body>
</html>
