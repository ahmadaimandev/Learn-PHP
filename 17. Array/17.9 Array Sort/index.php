<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting In Array</title>
</head>
<style>
    h2 {
        text-align: center;
        text-transform: capitalize;
        margin: 20px auto;
    }
</style>
    <h2>sort array ascending order - sort()</h2>
    <?php
    //sort car name based on alphabetical order
    $CarBrand = array("BWM", "Volvo", "Toyota");
    sort( $CarBrand );
    $CarLength = count( $CarBrand);
    for($x = 0; $x < $CarLength; $x++) {
        echo $CarBrand[$x];
        echo "<br>";    
    }
    //sort number based on numerical order:
    $NumList = array(5,7,10,12,45);
    sort( $NumList );
    $NumLength = count( $NumList);
    for($x = 0; $x < $NumLength; $x++) {
        echo $NumList[$x];
        echo "<br>";
    }
    ?>
    <h2>sort array descending order - rsort()</h2>
    <h2>sort array (ascending order), according to value - asort()</h2>
    <h2>sort array (ascending order), according to key - ksort()</h2>
    <h2>sort array (descending order), according to value - arsort()</h2>
    <h2>sort array (descending order), according to key - krsort()</h2>
<body/>
</html>