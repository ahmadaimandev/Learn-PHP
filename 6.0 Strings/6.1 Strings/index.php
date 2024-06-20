<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <h2>PHP Strings</h2>
    <?php
    //double
    $x = "Ahmad Aiman";

    //single quote does not perform such actions, it returns string 
    //like it was written, with the variable name:
    echo 'Hello $x <br>';
    echo "Hello $x" ."<br>";
    
    //function that will display a length of string which is 4
    echo "Length of the string: " .strlen($x) ."<br>";
    
    //function will display number of words in string
    echo "Number of words: " .str_word_count($x) ."<br>"; 

    echo strpos("Ahmad Aiman", "man"); // The first character position in a string is 0 (not 1).
    ?>
</body>
</html>