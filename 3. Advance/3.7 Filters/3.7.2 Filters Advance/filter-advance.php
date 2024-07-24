<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Advance</title>
</head>
<body>
    <h1>Filter Advance</h1>
    <?php
    echo "<h2>Validate and integer within a range</h2>";
    #This example uses the filter_var() function to check if a variable is both of type INT, and between 1 and 200:
        $int = 100;
        $min = 1;
        $max = 200;

        if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=> $min, "max_range"=>$max))) === false) {
            echo ("Variable value is not within the legal range");
        }else {
            echo ("Variable value is within the legal range");
        }
    ?>
</body>
</html>