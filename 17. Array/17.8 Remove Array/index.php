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
</body>
</html>