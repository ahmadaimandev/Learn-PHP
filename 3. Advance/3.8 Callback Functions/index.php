<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Callback Functions</title>
</head>
<body>
    <h1>First Example</h1>
    <?php
    #Pass a callback to PHP's array_map() function to calculate the length of every string in an array:
    function my_callback($item) {
        return strlen($item); # strlen = returns the length of a string in bytes
    }

    $strings = [
        "Hello",
        "World",
        "PHP",
        "is awesome!",
    ];
    $lengths = array_map("my_callback", $strings);
    print_r($lengths);
    ?>
</body>
</html>