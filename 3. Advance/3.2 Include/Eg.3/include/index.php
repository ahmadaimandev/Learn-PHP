<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Include PHP File</h1>
    <?php
    //when a file is included with the include statement and PHP cannot find it, the script will continue to execute:
    include 'variable.php';
    echo "My Car is $carName $carColor";
    ?>
</body>
</html>