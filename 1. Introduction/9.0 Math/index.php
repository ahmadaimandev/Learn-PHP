<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Math</title>
</head>

<body>
    <h1 style="text-align: center;">PHP - PI() function</h1>
    <?php
    echo "Output: " . (pi()) . "<br>";
    ?>

    <h1 style="text-align: center;">PHP - min() and max() functions</h1>
    <?php
    echo "Output Min Value: " . (min(0, 150, 30, 20, -8, -200)) . "<br>";
    echo "Output Max Value: " . (max(0, 150, 30, 20, -8, -200)) . "<br>";
    ?>

    <h1 style="text-align: center;">PHP - abs() function</h1>
    <?php
    echo "Output Abs Value: " . (abs(-7.9)) . "<br>";
    ?>

    <h1 style="text-align: center;">PHP - sqrt() function</h1>
    <?php
    echo "Square root value: 100" . "<br>";
    echo "Output Square Root Value: " . (sqrt(100)) . "<br>";
    ?>

    <h1 style="text-align: center;">PHP - round() function</h1>
    <?php
    $roundValue = 67.89;
    echo "Value: " . ($roundValue) . "<br>";
    echo "Output Round Value: " . (round($roundValue)) . "<br>";
    ?>

    <h1 style="text-align: center;">PHP - random() function</h1>
    <?php
    #Generate random number without control the lowest and highest number
    echo "Output Random Value: " . (rand()) . "<br>";
    #Generate random number with control the lowest and highest number
    echo "Output Random Value: " . (rand(10, 200)) . "<br>";
    ?>
</body>

</html>