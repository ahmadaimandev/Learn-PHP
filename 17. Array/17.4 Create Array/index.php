<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Arrays</title>
</head>
<style>
    h3 {
        text-align: center;
        margin: 20px auto;
        text-transform: capitalize;
        font-size: 30px;
        font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
</style>
<body>
    <h3>Create an array</h3>
    <?php
    $NameList = array("Ali", "Ahmad", "Abu", "Samad");
    //Array also can be write in brackets
    $NameList2 = ["Samad", "Zakaria", "Hidayah"];
    var_dump($NameList2);
    echo "<br>";
    var_dump($NameList);

    echo "<br>";

    //Array also can write in multiple line
    $CarList = [
        "Honda", 
        "Bentley", 
        "Rolls Royce", 
        "Proton", //A comma after the last thing is allowed
    ];
    var_dump( $CarList );
    ?>

    <h3>Array Keys</h3>
    <?php
    //Can have numbers or names
    $indexCar = [
        0 => "Proton",
        1 => "Perodua",
        2 => "Honda",
    ];
    
    $Proton = [
        "brand" => "Saga",
        "Engine Capacity" => 1.3,
        "Year" => 2022,
    ];
    var_dump( $Proton );
    print_r($Proton);

    echo "<br>";
    array_push($indexCar,"Toyota", "Ferrari");
    print_r($indexCar);
    ?>
</body>
</html>