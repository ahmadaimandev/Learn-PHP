<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casting</title>
</head>

<body>
    <h1>Cast to String</h1>
    <p>To cast to string, use the (string) statement:</p>
    <h2>Example 1</h2>
    <?php
    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "hello"; // String
    $d = true;    // Boolean
    $e = NULL;    // NULL
    
    $a = (string) $a;
    $b = (string) $b;
    $c = (string) $c;
    $d = (string) $d;
    $e = (string) $e;

    //To verify the type of any object in PHP, use the var_dump() function:
    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    var_dump($e);
    ?>

    <h1>Cast To Integer</h1>
    <p>To cast to integer, use the (int) statement:</p>
    <h2>Example 2</h2>
    <?php
    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "25 kilometers"; // String
    $d = "kilometers 25"; // String
    $e = "hello"; // String
    $f = true;    // Boolean
    $g = NULL;    // NULL
    
    $a = (int) $a;
    $b = (int) $b;
    $c = (int) $c;
    $d = (int) $d;
    $e = (int) $e;
    $f = (int) $f;
    $g = (int) $g;

    //To verify the type of any object in PHP, use the var_dump() function:
    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    var_dump($e);
    var_dump($f);
    var_dump($g);
    ?>

    <h1>Cast To Float</h1>
    <p>To cast to float, use the (float) statement:</p>
    <h2>Example 3</h2>
    <?php
    $a = 5;       // Integer
    $b = 5.34;    // Float
    $c = "25 kilometers"; // String
    $d = "kilometers 25"; // String
    $e = "hello"; // String
    $f = true;    // Boolean
    $g = NULL;    // NULL
    
    $a = (float) $a;
    $b = (float) $b;
    $c = (float) $c;
    $d = (float) $d;
    $e = (float) $e;
    $f = (float) $f;
    $g = (float) $g;
    
    //To verify the type of any object in PHP, use the var_dump() function:
    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    var_dump($e);
    var_dump($f);
    var_dump($g);
    ?>
</body>

</html>