<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exceptions</title>
</head>
<body>
    <h1>Exceptions</h1>
    <p>Show a message when an exception is thrown:</p>
    <?php
    echo "<h2>Example 1</h2>";

    function divide($dividen, $divisor) {
        if ($divisor == 0) {
            throw new Exception("Division by Zero");
        }
        return $dividen / $divisor;
    }

    try {
        echo divide(5, 0);
    } catch (Exception $e) {
        echo "unable to divide";
    }
    /**
     * The catch block indicates what type of exception should be caught 
     * and the name of the variable which can be used to access the exception
     * In the example above, the type of exception is Exception and the variable name is $e.
     */
    ?>
</body>
</html>