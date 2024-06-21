<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessed Array</title>
</head>
<style>
    h2 {
        margin:  20px auto;
        text-align: center;
        text-transform: uppercase;
        font-family: 'Courier New', Courier, monospace;
    }
</style>
<body>
    <h2>How to access Array</h2>
    <?php
    $cars = array("Proton","Perodua", "Ferrari");
    echo "Output: ". $cars[2] ."<br>"; //Note: The first item has index 0.

    //To access items from an associative array, use the key name:
    $CarList = array("Brand" => "Proton", "Model" => "Bezza", "Engine Capacity" => 1.3);
    echo "Output: ". $CarList["Brand"] ."<br>"; //double quote
    echo "Output: ". $CarList['Engine Capacity']; //single quote
    ?>

    <h2>Execute function item</h2>
    <?php
    
    ?>
</body>
</html>