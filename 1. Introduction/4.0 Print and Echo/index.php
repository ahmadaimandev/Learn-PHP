<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo and Print</title>
</head>
<body>
    <h2>Echo Statement</h2>
    <?php
    echo "<h2>PHP is Fun!</h2>";
    echo "Hello world!<br>";
    echo "I'm about to learn PHP!<br>";
    echo "This ", "string ", "was ", "made ", "with multiple parameters. <br>";

    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";
    $x = 5;
    $y = 4;

    echo "<h2>" .$txt1. "</h2>";
    echo "Study PHP at "  .$txt2. "<br>";
    echo "Total sum of two numbers: " .$x + $y;
    
    echo "<hr>";
    ?>
    <h2>Print Statement</h2>
    <?php
    print "<h2>PHP is Fun!</h2>";
    print "Hello world!<br>";
    print "I'm about to learn PHP!";

    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";
    $x = 5;
    $y = 4;

    print "<h2>" . $txt1 . "</h2>";
    print "Study PHP at " . $txt2 . "<br>";
    print "Total sum of two numbers: " .$x + $y;
    ?>
</body>
</html>