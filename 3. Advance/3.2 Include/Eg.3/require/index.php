<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Require File PHP</h1>
    <?php
    //the echo statement will not be executed because the script execution dies after the require statement returned a fatal error:
    require 'variable.php';
    echo "My Car Name is $carBrand $carColor";
    ?>
</body>
</html>