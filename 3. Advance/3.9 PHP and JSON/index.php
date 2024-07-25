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
    
    $age = array(
        "Ahmad" => 34,
        "Samad" => 56,
        "Jalil" => 67
    );

    echo json_encode($age) . "<br>";
    print_r($age);
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

    echo json_encode($cars) . "<br>";
    print ($cars);
    ?>

    <?php
    echo "<h2>PHP - json_decode()</h2>";
    echo "<p>The json_decode() function is used to decode a JSON object into a PHP object or an associative array.</p>";
    echo "<h3>Example 1</h3>";
    #This example decodes JSON data into a PHP object:
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
    var_dump(json_decode($jsonobj));
    echo "<br>";
    #The json_decode() function returns an object by default. The json_decode() function has a second parameter, 
    #and when set to true, JSON objects are decoded into associative arrays.
    var_dump(json_decode($jsonobj, true));
    ?>

    <?php
    echo "<h2>PHP - Accessing the Decoded Values</h2>";
    echo "<p>Here are two examples of how to access the decoded values from an object and from an associative array:</p>";
    echo "<h3>Example 1</h3>";
    #This example shows how to access the values from a PHP object:
    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    $obj = json_decode($jsonobj);

    echo $obj->Peter;
    echo $obj->Ben;
    echo $obj->Joe;
    ?>

</html>