<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Constant</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f7f7f7;
            padding: 20px;
        }
        .note {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .note h1, .note h2, .note h3 {
            color: #333;
        }
        .note h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        .note h2 {
            font-size: 20px;
            margin-bottom: 8px;
        }
        .note h3 {
            font-size: 18px;
            margin-bottom: 6px;
        }
        .note p {
            margin-bottom: 10px;
        }
        .note code {
            background-color: #f0f0f0;
            padding: 2px 6px;
            border-radius: 4px;
            font-size: 14px;
        }
    </style>
<body>
<div class="note">
        <h1>PHP - Constant</h1>

        <h2>Create a PHP Constant</h2>
        
        <div class="example">
            <h3>Example 1</h3>
            <?php
            echo "<p>Create a constant with a case-sensitive name:</p>";
            echo "<code>define(name, value, case-insensitive)</code><br>";
            define("GREETING", "Welcome to W3Schools.com!");
            echo "Output: " . GREETING;
            ?>
        </div>

        <div class="example">
            <h3>Example 2</h3>
            <?php
            echo "<p>Create a constant with a case-insensitive name:</p>";
            define("Greeting", "Welcome to W3Schools.com!", true);
            echo "Output: " . Greeting;
            ?>
        </div>

        <h1>PHP - const keyword</h1>
        
        <div class="example">
            <?php
            echo "<p>Create a constant with the const keyword:</p>";
            const MyCar = "Volvo";
            echo "My favorite car is " . MyCar;
            ?>
        </div>

        <h1>PHP - Constant Array</h1>
        
        <div class="example">
            <?php
            define("cars", [
                "Alfa Romeo",
                "BMW",
                "Toyota"
            ]);
            echo cars[0];
            ?>
        </div>
    </div>
</body>
</html>