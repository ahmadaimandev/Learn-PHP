<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Callback Functions</title>
</head>
<body>
    <h1>Example 1</h1>
    <h2>Callback Functions</h2>
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

    <p>Starting with version 7, PHP can pass anonymous functions as callback functions:</p>

    <h1>Example 2</h1>
    <?php
    #Use an anonymous function as a callback for PHP's array_map() function:
        $strings = [
            "Hello",
            "World",
            "Javascript",
            "can be used",  
            "Frontend and Backend"
        ];

        $lengths = array_map( function($item) { return strlen($item); }, $strings);
        print_r($lengths);
    ?>  

    <h1>Example 3</h1>
    <h2>Callbacks in User Defined Functions</h2>
    <?php
    #Run a callback from a user-defined function:
    ?>
</body>
</html>