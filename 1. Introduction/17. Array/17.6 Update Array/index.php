<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Array</title>
</head>
<style>
    h2 {
        text-align: center;
        margin: 20px auto;
        text-transform: uppercase;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
</style>
<body>
    <h2>Update Array Items</h2>
    <?php
    //to update:
    //Refer index number for indexed arrays
    //key name for associative array

    //Indexed Array
    $cars = array("Proton", "Perodua", "Toyota", "Honda");
    $cars[1] = "Ferrari";
    var_dump($cars);
    //NOTE: The first item has index 0.

    //Associative Array
    $CarsInfo = array("Brand" => "Ford", "Model" => "Mustang", "Year" => 1965);
    $CarsInfo["Year"] = 2024;
    echo "<br>";
    var_dump($CarsInfo);

    //Display in lopp
    foreach($CarsInfo as $x => $y) {
        echo "$x: $y <br>";
    }
    ?>

    <h2>Update Array Items in ForEach Loop</h2>
    <?php
    //Change all the value to "Ford"
    $CarName = array("Volvo", "BMW", "Toyota");
    foreach ($CarName as &$UpdateCarName) {
        $UpdateCarName = "Ford";
    }
    unset($UpdateCarName);
    //unset() function used to destroy a specified variable or variables
    //Remember to use unset() function after loop
    //without unset() function, the variable will remain as reference to the last array item
    var_dump($CarName);
    ?>
</body>
</html>
