<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP and JSON</title>
</head>
<body>
    <h1>json_encode() - Example 1</h1>
    <?php
    echo "<h2>PHP - JSON_encode()</h2>";
    echo "<p>The json_encode() function is used to encode a value to JSON format.</p>";
    #This example shows how to encode an associative array into a JSON object:
    $age = array (
        "Peter" => 45,
        "John" => 35,
        "Mary" => 32,
        "Jane" => 29,
        "Jim" => 27
    );
    echo json_encode($age) ."<br>";
    ?>
    <h1>json_encode() - Example 2</h1>
    <?php
    #This example shows how to encode an indexed array into a JSON array:
    $cars = array (
        "Volvo",
        "BMW",
        "Mercedes",
        "Audi"
    );
    echo json_encode($cars) ."<br>";
    ?>

    <h1>json_decode() - Example 1</h1>
</body>
</html>