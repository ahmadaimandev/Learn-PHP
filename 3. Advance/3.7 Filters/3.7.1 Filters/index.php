<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter</title>
</head>
<style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 5px;
    }
</style>

<body>
    <h2>filter_list() function</h2>
    <table>
        <tr>
            <td>Filter Name</td>
            <td>Filter ID</td>
        </tr>
        <?php
        /**
         * filter_list() will return an array of all the available filter names in PHP
         * Each filter is represented by a string
         */
        foreach (filter_list() as $id => $filter) {
            echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
        }
        ?>
    </table>

    <h1>filter_var() function</h1>
    <h3>Sanitize A String</h3>
    <?php
    //This example uses the filter_var() function to remove all HTML tags from a string.
    $str = "<h1>Hello World!</h1>";
    $newstr = filter_var($str, FILTER_SANITIZE_STRING);
    echo $newstr;
    ?>

    <h2>Validate An Integer</h2>
    <?php
    //This example will check the variable is int or not.
    $firstInt = 100;
    if (!filter_var($firstInt, FILTER_VALIDATE_INT) === false) {
        echo ("Integer is valid");
    }else {
        echo ("Integer is not valid") . "<br>";
    }
    ?>
    
    <h2>filter_var() And With Problem 0 </h2>
    <?php
    $int = 0;
    if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
        echo ("Integer is valid");
    }else {
        echo ("Integer is not valid") . "<br>";
    }
    ?>
</body>

</html>