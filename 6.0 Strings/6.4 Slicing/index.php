<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slicing a String</title>
</head>
<body>
    <h2 style="text-transform: uppercase; text-align:center; font-size: 40px;">Slicing Strings</h2>


    <h3 style="text-transform: uppercase;">Slicing Strings</h3>
    <?php
    //Slicing strings
    $string = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"; // Our big pizza
    $slice = substr($string,2,10); // We start at position 2 (C) and take 10 slices
    echo "The output is: $slice"; //output "CDEFGHIJKL"
    echo "<br>";
    ?>

    <hr>
    
    <h3 style="text-transform: uppercase;">Slicing to the end</h3>
    <?php
    //Slicing to the end
    $EndString = "ABCDEFGHIJKLMN";
    $startSlice = substr($EndString,6); //Start the slice at index 6 and go all the way to the end:
    echo $startSlice; // The output "GHIJKLMN"
    ?>
</body>
</html>