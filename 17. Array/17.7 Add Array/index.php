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
</body>
</html>