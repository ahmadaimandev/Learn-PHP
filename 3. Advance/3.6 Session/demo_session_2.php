<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Session Value</title>
</head>
<body>
    <h1>Display session variable</h1>   
    <?php
    echo "Username: " . $_SESSION["username"] . "<br>";
    echo "Id number: " . $_SESSION["Id_number"] . "<br>";
    ?>
</body>
</html>