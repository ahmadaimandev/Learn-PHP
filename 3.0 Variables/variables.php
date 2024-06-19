<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Declaring PHP Variables</title>
</head>
<style>
    * {
        font-family: "Roboto", sans-serif;
    }

    .header-title {
        margin: 0 auto;
        width: 60%;
    }

    h2 {
            text-align: center;
            text-transform: uppercase;
    }
</style>

<body>
    <div class="header-title">
        <h2>Declaring PHP Variables</h2>
    </div>
</body>
</html>
<?php
$Name = "James"; //put quotes around the value when assign text value
$firstNum = 1;
$secondNum = 3;
var_dump($firstNum); //using var_dump() to get variable data type
echo "<br>";
var_dump($Name);
echo "<br>";

echo "<br>";
echo "Hello " .$Name. "<br>";
echo "Total of two numbers: " .$firstNum + $secondNum. "<br>";
?>
