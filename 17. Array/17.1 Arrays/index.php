<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array In PHP</title>
</head>
<style>
    h3 {
        text-align: center;
        text-transform: uppercase;
    }
</style>

<body>
    <h3>Arrays</h3>
    <?php
    $carList = array("Proton, Perodua", "Honda", "Toyota");
    $numList = array(1, 2, 3, 4, 5, 6);
    var_dump($carList, $numList); //will show variable type
    ?>

    <hr>

    <h3>Array Items</h3>
    <?php
    function myFunction()
    {
        echo "This text call from function i made!";
    }
    $myArr = array("Volvo", 15, ["Apples", "Bananas"], myFunction());
    var_dump($myArr);
    echo count($myArr);
    ?>

    <hr>

    <h3>Array function</h3>
    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo count($cars);
    ?>
</body>

</html>