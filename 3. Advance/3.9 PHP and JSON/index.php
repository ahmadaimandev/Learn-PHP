<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP and JSON</title>
</head>
<body>
    <h1>Example 1</h1>
    <?php
    echo "<h2>PHP - JSON_encode()</h2>";
    echo "<p>The json_encode() function is used to encode a value to JSON format.</p>";
    #This example shows how to encode an associative array into a JSON object:
    $age = array (
        "name" => "John",
        "age" => 25,
        "city" => "New York"
    );
    ?>
</body>
</html>