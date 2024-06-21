<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>
<style>
    h3 {
        text-transform: capitalize;
        margin:  20px auto;
        text-align: center;
    }
</style>
<body>
    <h3>Associative Array</h3>
    <?php
    // => symbol to associate a key with a value in a associative array
    $car = array("Brand" => "Proton", "Model" => "Persona", "Year" => 2016, "Engine Capacity" => 1.6);
    var_dump($car);
    echo "<br>";
    print_r($car); //This syntax to print array.
    ?>

    <h3>Access Associative Array</h3>
    <?php
    $car = array("Brand" => "Proton", "Model" => "Persona", "Year" => 2016, "Engine Capacity" => 1.6);
    echo "Car Model:" .$car['Model'];
    ?>

    <h3>Change Value Array</h3>
    <?php
    
    ?>
</body>
</html>