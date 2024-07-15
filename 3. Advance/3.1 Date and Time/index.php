<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Get A Date</h2>
    <p>Date Format</p>
    <?php
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . date("l");
    ?>

    <h2>Automatic Copyright year</h2>
    <p>&copy;Since 2010 - <?php echo date("Y");?></p>

    <h2>Get A Time</h2>
</body>

</html>