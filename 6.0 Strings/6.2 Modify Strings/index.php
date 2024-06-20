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
    $justname = "Aiman";
    echo strtoupper($justname) ."<br>"; //uppercase functions
    echo strtolower($justname) ."<br>"; //lowercase functions
    echo str_replace("Aiman", "Ali", $justname); //function to replace other strings
    
    ?>
</body>
</html>