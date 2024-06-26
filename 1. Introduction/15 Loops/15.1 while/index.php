<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loop</title>
</head>
<style>
    h2 {
        text-align: center;
        margin: 20px auto;
        background-color: black;
        color: white;
        width: 700px
    }
    p {
        text-align: center;
    }
</style>
<body>
    <h2>Normal Loop</h2>
    <p>The while loop does not run a specific number of times, 
        but checks after each iteration if the condition is still true.</p>
    <?php
    $num = 1;
    while($num < 20) {
        echo $num;
        $num++;
        #remember to increment $i, or else the loop will continue forever.
        echo "<br>";
    }
    ?>

    <h2>While loop with break statement</h2>
    <p>With the break statement we can stop the loop even if the condition is still true:</p>
    <?php
    $x = 1;
    while($x < 6) {
        if ($x == 3) break;
        //Stop the loop when $i is 3
        echo $x;
        $x++;
        echo "<br>";
    }
    ?>

    <h2>The continue statement</h2>
    <p>With the continue statement we can stop the current iteration, and continue with the next</p>
    <?php
    $loopNum = 1;
    while($loopNum < 20) {
        if ($loopNum == 15) continue;
        $loopNum++;
        echo $loopNum;
        echo "<br>";
    }
    ?>
</body>
</html>