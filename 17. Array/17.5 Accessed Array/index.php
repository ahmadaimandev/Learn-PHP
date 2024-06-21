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
    function myFunction() {
        echo "I come from a function";
    }
    $myArr = array("Volvo", 15, myFunction());

    //$myArr[2]();
    ?>

    <h2>Execute Function by Referring to the key name</h2>
    <?php
    function myFunction2() {
        echo "This is my Second Function!";
    }
    $myArr1 = array("Car Brand" => "Volvo", "Years Manufactured" => 2019, "Message" => myFunction2());
    //$myArr1["Car Brand"]();
    ?>

    <h2>Loop Through associative array</h2>
    <?php
    //using foreach
    $ArrayList = array("Brand" => "Ford", "Model" => "Mustang", "Year" => 1964);
    foreach($ArrayList as $x => $y) {
        echo "$x: $y <br>";
    }
    ?>

    <h2>Loop through indexed array</h2>
    <?php
    $CarBrand = array("Volvo", "Proton", "Perodua");
    foreach($CarBrand as $x) {
        echo "$x <br>";
    }
    ?>
</body>
</html>