<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Numbers</title>
</head>
<style>
    h1 {
        border: 1px solid;
        width: 20%;
        margin: 20px auto;
        text-align: center;
        text-transform: uppercase;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        transition: 0.5s ease-in-out;
        border-radius: 10px;
        cursor: pointer;
    }

    h1:hover {
        background-color: purple;
        border: 1px solid purple;
        color: white;
        transition: 0.5s ease-in-out;
        border-radius: 4px;
    }

    .first-main {
        background-color: antiquewhite;
        padding: 10px;
    }
</style>
<body>
    <h1>Numbers In PHP</h1>

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