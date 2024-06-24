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
    <h2>sort array ascending order - sort()</h2>
    <?php
    //Car array ascending in alphabetical order:
    $CarsBrand = array("BWM", "Mercedes", "Mustang", "Proton", "Geely", "Daihatsu");
    $Number = array(34,24,12,10,6,9);
    sort($CarsBrand);
    $CarLength = count($CarsBrand);
    for($x = 0; $x < $CarLength; $x++) {
        echo $CarsBrand[$x];
        echo "<br>";
    }

    sort($Number);
    $Numlength = count($Number); 
    for($x = 0; $x < $Numlength; $x++) {
        echo $Number[$x]; //before sort, the number will stay in in ascending order
        echo "<br>";
    }
    ?>

    <h2>Sort array in descending order rsort()</h2>
    <?php
    rsort($Number);
    $Numlength = count($Number); 
    for($x = 0; $x < $Numlength; $x++) {
        echo $Number[$x]; //before sort, the number will stay in in ascending order
        echo "<br>";
    }
    ?>

    <h2>Sort Array (Ascending Order), according to value- asort()</h2>
    <?php
    $UserAge = array("Peter" => "35", "Ben Stiller" => "32", "Ryan Howard" => "45");
    ksort($UserAge);

    foreach($UserAge as $x => $x_value) {
        echo "Name: " . $x . ", Age: " . $x_value;
        echo "<br>";
    }
    ?>
<body/>
</html>