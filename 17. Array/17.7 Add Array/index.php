<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Array</title>
</head>
<style>
    h2 {
        text-align: center;
        margin: 20px auto;
        text-transform: capitalize;
        font-family: Arial, Helvetica, sans-serif;
    }
</style>
    <h2>Add Array</h2>
    <?php
    //use bracket to add new array into existing array

    $fruits = array("Banana", "Watermelon", "Strawberry");
    $fruits[] = "Orange";

    var_dump($fruits); 
    ?>

    <h2>Add array in associative array</h2>
    <?php
    //Add one item to the car array
    $CarType = array("Brand" => "Ford", "Model" => "Mustang");
    $CarType ["Color"] = "Silver With Blue Stripe";
    var_dump( $CarType );
    ?>

    <h2>Adding multiple array</h2>
    <?php
    //Add three items to the fruits array
    $FruitList = array("Banana", "Watermelon", "Strawberry");
    array_push($FruitList,"Peach", "Rockmelon", "Platano");
    var_dump( $FruitList );
    ?>

    <h2>Add Multiple items into Associative Array</h2>
    <?php
    //Add two items to the cars array:
    $FordModel = array("Brand" => "Ford", "Model" => "Mustang", "Engine Capacity" => 2.8);
    $FordModel += ["Color" => "Yellow", "Year" => 2024];
    var_dump($FordModel);
    ?>
</body>
</html>