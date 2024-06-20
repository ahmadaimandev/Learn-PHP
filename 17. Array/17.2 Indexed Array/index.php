<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indexed Array</title>
</head>
    <style>
        h3 {
            text-align: center;
            text-transform: capitalize;
            border: 1px solid black;
            border-radius: 10px;
            background-color: black;
            color: white;
            width: 20%;
            margin: 20px auto;
            transition: 0.3s ease-in-out;
            font-size: 18px;
        }
        h3:hover {
            background-color: white;
            border: 1px solid black;
            color: black;
            border-radius: 0px;
            cursor: pointer;
        }
    </style>
<body>
    <h3>Indexed Array</h3>
    <p>Indexed array start at 0</p>
    <?php
    $CarList = array("Proton", "Perodua");
    var_dump( $CarList );
    echo "<p>It will start count from 0 and so on</p>"
    ?>

    <h3>Accessed Indexed Array</h3>
    <?php
    $AccessCarNum = array("Proton", "Honda", "Perodua", "Toyota");
    //count from 0
    echo "This car name is: $AccessCarNum[0] <br>";
    echo "This car name is: $AccessCarNum[1] <br>";
    echo "This car name is: $AccessCarNum[2] <br>";
    echo "This car name is: $AccessCarNum[3]";
    ?>

    <h3>Change Array Value</h3>
    <?php
    //Change the second item:
    $ChangeArray = array("Ali", "Ahmad", "Abu", "Jackson");
    $ChangeArray[3] = "Zakaria";
    var_dump($ChangeArray);
    ?>

    <h3>Loop In Array</h3>
    <?php
    //Display all array items:

    $ListName = array("Aiman", "Ali", "Ahmad", "Samad", "Umar");
    foreach ($ListName as $loop) {
        echo "$loop <br>";
    }
    ?>

    <h3>Index Number</h3>
    <?php
    /*
    Example:
    $cars[0] = "Volvo";
    $cars[1] = "Audi";
    $cars[2] = "Proton";

    by adding array_push() function to add a new item, the new item will get the index 3:
    */
    //Example with ordered number;
    $cars[0] = "Volvo";
    $cars[1] = "Audi";
    $cars[2] = "Proton";
    
    array_push($cars,"Ford");
    var_dump($cars);

    echo "<br>";
    //if you use the array_push() function to add a new item, the new item will get the index 3:

    //example with random numbers:
    $LuxCar[12] = "Mercedes";
    $LuxCar[14] = "Lexus";
    $LuxCar[56] = "Bentley";
    $LuxCar[78] = "Rolls Royce";

    array_push($LuxCar, "Ferrari");
    var_dump($LuxCar);
    //if you use the array_push() function to add a new item, the new item will get the index 79:
    ?>    
</body>
</html>