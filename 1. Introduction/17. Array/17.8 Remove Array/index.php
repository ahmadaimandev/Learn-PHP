<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Array</title>
</head>
<style>
    h2 {
        text-align: center;
        margin: 20px auto;
        text-transform: capitalize;
    }
</style>
<body>
    <h2>Remove An Array</h2>
    <?php
    //Remove second item
    $BoxOfFruits = array("Banana", "Platano", "Watermelon", "Orange", "Strawberry");
    array_splice($BoxOfFruits, 0, 2);
    /*Explain
    0 = is offset. means start at the beginning of the array
    2 = length of the array. Remove 2 elements from the array starting at the offset
    */
    var_dump($BoxOfFruits);
    ?>

    <h2>Unset Function</h2>
    <?php
    $BoxOfFruits = array("Banana", "Platano", "Watermelon", "Orange", "Strawberry");
    unset($BoxOfFruits[1]);
    var_dump($BoxOfFruits);
    ?>

    <h2>Using array_splice() to remove multiple items</h2>
    <?php
    //remove 2 items, starting a the second item (index 1)
    $BoxOfFruits = array("Banana", "Platano", "Watermelon", "Orange", "Strawberry");
    array_splice($BoxOfFruits, 0,3);
    var_dump($BoxOfFruits);
    echo "<br>";
    
    //Remove first and second items:
    $BoxOfFruits = array("Banana", "Platano", "Watermelon", "Orange", "Strawberry");
    unset($BoxOfFruits[1], $BoxOfFruits[2]);
    var_dump($BoxOfFruits);
    ?>

    <h2>Remove item in associative array</h2>
    <?php
    $Cars = array("Brand" => "Ford", "Model" => "Mustang", "Year" => 1964);
    unset($Cars['Model']);
    var_dump($Cars);
    ?>

    <h2>Using array_diff()</h2>
    <?php
    $Cars = array("Brand" => "Ford", "Model" => "Mustang", "Year" => 1964);
    $newArray = array_diff($Cars,["Mustang", 1964]);
    var_dump($newArray);
    ?>

    <h2>array_pop()</h2>
    <?php
    $BoxOfFruits = array("Banana", "Platano", "Watermelon", "Orange", "Strawberry");
    array_pop($BoxOfFruits); //remove last item
    var_dump($BoxOfFruits);
    ?>
    <h2>array_shift()</h2>
    <?php
    $BoxOfFruits = array("Banana", "Platano", "Watermelon", "Orange", "Strawberry");
    array_shift( $BoxOfFruits); //remove first item
    var_dump($BoxOfFruits);
    ?>
</body>
</html>