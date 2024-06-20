<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Numbers</title>
</head>
<style>
    h2 {
        border: 1px solid;
        width: 20%;
        margin: 20px auto;
        text-align: center;
        text-transform: uppercase;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        transition: 0.2s ease-in-out;
        border-radius: 20px;
    }

    h2:hover {
        background-color: red;
        border: 1px solid red;
        color: white;
        transition: 0.2s ease-in-out;
    }

    .first-main {
        background-color: antiquewhite;
        padding: 10px;
    }
</style>
<body>
    <h2>Numbers In PHP</h2>

    <main class="first-main">
        <p>This is variable numeric types. Created when you assign
            a value to them:
        </p>
        <?php
        $a = 10;
        $b = 20;
        $c = 30;
        echo "The variable type: <br>"; 
        var_dump($a);
        var_dump($b);
        var_dump($c);
        ?>
    </main>
</body>
</html>