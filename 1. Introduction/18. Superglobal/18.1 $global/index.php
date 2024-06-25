<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$global variables</title>
</head>
<body>
    <?php
    $MyNum = 75;

    function NameFunction() {
        echo $GLOBALS ['MyNum'];
    }
    NameFunction();
    ?>
</body>
</html>