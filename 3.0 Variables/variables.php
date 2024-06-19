<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Declaring PHP Variables</title>
</head>

<h3>This is Global Scope</h3>
<p><strong>Variable with global scope</strong></p>
<?php
$x = 5;
function myTest() {
    //using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
    //A variable declared outside a function has a GLOBAL SCOPE 
    //and can only be accessed outside a function:
}
myTest();
echo "<p>Variable x inside the function is: $x</p>";
?>

<h3>This is Local Scope</h3>
<?php
function LocalScope() {
    $y = 7; 
    echo "<p>Variable x inside function is $y</p>";
}
LocalScope();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $y</p>";
?>
</body>
</html>
