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
    $justname = "Hello World";
    echo strtoupper($justname) ."<br>"; //uppercase functions
    echo strtolower($justname) ."<br>"; //lowercase functions
    echo str_replace("World", "Aiman", $justname) ."<br>"; //function to replace other strings
    echo strrev($justname); //function to reverse a string

    ?>
</body>
</html>