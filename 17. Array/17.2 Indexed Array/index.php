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
            text-transform: uppercase;
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
    
    ?>
</body>
</html>