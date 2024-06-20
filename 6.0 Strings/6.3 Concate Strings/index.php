<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concate Strings</title>
</head>
<body>
    <h3 style="text-align: center;">String Concatenation</h3>
    <?php
    $x = "Hello";
    $y = "World";
    $singlequote = $x. " " .$y; //without double quotes
    $doublequote = "$x $y";
    echo $singlequote;
    echo "<br>";
    echo $doublequote;
    ?>
</body>
</html>