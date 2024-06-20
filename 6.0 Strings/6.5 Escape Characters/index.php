<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape Characters</title>
</head>
<body>
    <h2 style="text-align: center; text-transform: uppercase;">Escape Characters</h2>
    <?php
    //This will generate and error
    //To fix this problem, use the escape character \":
    $sample1 = "We are the so-called \"Vikings\" from the north.";
    echo "The output: $sample1";
    ?>
</body>
</html>