<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <title>Declaring PHP Variables</title>

    <style>
        h3 {
            background-color: antiquewhite;
        }
    </style>
</head>
<h3>This is Global Scope</h3>
<?php
$x = 5;
function myTest()
{
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
function LocalScope()
{
    $y = 7;
    echo "<p>Variable x inside function is $y</p>";
}
LocalScope();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $y</p>";
?>

<h3>Global Keyword</h3>
<?php
//Global keyword used to access a global variable from within a function.
//use the global keywords before the variableS (inside the function):
$a = 5;
$b = 10;

function TotalFunction()
{
    global $a, $b;
    $b = $a + $b;
}
TotalFunction();
echo "Total: " . $b;
?>

<h3>Global index</h3>
<p>$GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];</p>
<?php 
/*index hold the name of the variables. It also accessible from within function
and can be used to update global variables directly
*/
$c = 5;
$d = 10;

function Globalfunc () {
    $GLOBALS['d'] = $GLOBALS['c'] + $GLOBALS['d'];
}

Globalfunc() ;
echo "Total of two number: " .$d;
?>

<h3>Static keyword</h3>
<p>Must declare the static keyword when you first declare variable</p>
<?php
function StaticFunc () {
    static $e = 0;
    echo $e;
    $e++;
}
//each time function is called, that variable will still have the information it contained
//from the last time the function was called.

//NOTE: The variable is still local to the function 
StaticFunc();
StaticFunc();
StaticFunc();
//Variable $e will increased the number
?>
</body>

</html>