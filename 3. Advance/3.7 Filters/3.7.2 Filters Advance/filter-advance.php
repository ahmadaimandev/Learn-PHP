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

    <?php
    echo "<h2>Validate IPv6 Address</h2>";
    #This example uses the filter_var() function to check if the variable $ip is a valid IPv6 address:
        $ipOwnership = array(
            "2001:db8::/32",
            "2001:20::/28",
            "fc00::/7",
            "100::/8",
            "200::/7",
            "400::/6",
            "800::/5",
            "1000::/4",
            "2001:0db8:85a3:08d3:1319:8a2e:0370:7334"
        );

        foreach($ipOwnership as $ipList) {
            if (!filter_var($ipList, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
                echo ("IPv6 address is valid") ."<br>";
            }else {
                echo ("IPv6 address is not valid") ."<br>";
            }
        }
    ?>
</body>
</html>