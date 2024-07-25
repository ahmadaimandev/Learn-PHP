<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP and JSON</title>
</head>
<body>
    <h1>PHP And JSON</h1>
    <?php
    echo "<h2>PHP - json_encode()</h2>";
    echo "<p>The json_encode() function is used to encode a value to JSON format.</p>";
    echo "<h3>Example 1</h3>";
    #This example shows how to encode an associative array into a JSON object:

    $age = array (
        "Ahmad" => 34,
        "Samad" => 56,
        "Jalil" => 67
    );

    echo json_encode( $age ) ."<br>";
    print_r( $age );
    ?>
    <?php
    echo "<h3>Example 2</h3>";
    #This example shows how to encode an indexed array into a JSON array:
    $cars = array(
        "BMW",
        "Mercedes",
        "Audi",
        "Volvo",
    );

    echo json_encode( $cars ) ."<br>";  
    ?>
</html>