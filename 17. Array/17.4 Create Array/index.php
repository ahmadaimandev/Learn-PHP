<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h3 {
        text-align: center;
        margin: 20px auto;
        text-transform: capitalize;
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

    //Array also can write in multiple line
    $CarList = [
        "Honda", 
        "Bentley", 
        "Rolls Royce", 
        "Proton", //A comma after the last thing is allowed
    ];
    ?>
</body>
</html>