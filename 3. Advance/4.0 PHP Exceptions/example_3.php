<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>The try...catch...finally Statement</h1>";
    echo "<h2>Example 2</h2>";
    echo "<p>Output a string even if an exception was not caught:</p>";

    function divide($dividen, $divisor) {
        if($divisor == 0) {
            throw new Exception("Division by zero");
        }
        return $dividen / $divisor;
    }

    try {
        echo divide(5,0);
    } finally {
        echo "Process Complete";
    }
    ?>
</body>
</html>