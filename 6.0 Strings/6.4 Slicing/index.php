<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slicing a String</title>
</head>
<body>
    <h2 style="text-transform: uppercase; text-align:center; font-size: 40px;">Slicing Strings</h2>

    <?php
    //Slicing strings
    $string = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"; // Our big pizza
    $slice = substr($string,2,10); // We start at position 2 (C) and take 10 slices
    echo $slice; //output "CDEFGHIJKL"
    ?>

    <?php
    //Slicing to the end
    
    ?>
</body>
</html>