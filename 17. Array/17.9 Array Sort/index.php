<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting In Array</title>
</head>
<style>
    h2 {
        text-align: center;
        text-transform: capitalize;
        margin: 20px auto;
    }
</style>
<body>
    <h2>sort array ascending order - sort()</h2>
    <?php
    //Car array ascending in alphabetical order:
    $CarsBrand = array("BWM", "Mercedes", "Mustang", "Proton", "Geely", "Daihatsu");
    $Number = array(12,4,6,5, 13,1);
    sort($CarsBrand);
    $CarLength = count($CarsBrand);
    for($x = 0; $x < $CarLength; $x++) {
        echo $CarsBrand[$x];
        echo "<br>";
    }

    sort($Number);
    $Numlength = count($Number); 
    for($x = 0; $x < $Numlength; $x++) {
        echo $Number[$x];
        echo "<br>";
    }
    ?>  
</body>
</html>