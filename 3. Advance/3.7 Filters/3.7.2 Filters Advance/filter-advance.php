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

    <?php
    echo "<h2>Validate URL - Must Contain QueryString</h2>";
    #xample uses the filter_var() function to check if the variable $url is a URL with a querystring:
        $url = array(
            "http://www.example.com/index.php?id=1",
            "https://www.example.com/index.php?id=1",
            "ftp://www.example.com/index.php?id=1",
            "mailto:example@example.com?subject=Hello%20World",
            "tel:+1234567890",
            "sms:+1234567890",
            "data:text/plain;charset=utf-8,Hello%20World",
            "javascript:alert('Hello%20World')"
        );

        foreach ($url as $urlListCheck) {
            if(!filter_var($urlListCheck, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
                echo ("URL is valid") ."<br>";
            }else {
                echo ("URL is not valid") ."<br>";
            }
        }
    ?>

    <?php
    echo "<h2>Remove Characters With ASCII Value > 127</h2>";
    #example uses the filter_var() function to sanitize a string. It will both remove all HTML tags, 
    #and all characters with ASCII value > 127, from the string:

    $str = array (
        "<h1>Hello World</h1>",
        "Hello World",
        "Hello World <h1>Hello World</h1>",
        "Hello World <h1>Hello World</h1> <h1>Hello World</h1>",
        "<h1>Hello WorldÆØÅ!</h1>",
        "Hello WorldÆØÅ!",
        "Hello WorldÆØÅ! <h1>Hello WorldÆØÅ!</h1>",
        "Hello WorldÆØÅ! <h1>Hello WorldÆØÅ!</h1> <h1>Hello WorldÆØÅ!</h1>",
        "&lt;h1&gt;Hello World&lt;/h1&gt;",
        "&lt;h1&gt;Hello World&lt;/h1&gt; &lt;h1&gt;Hello World&lt;/h1&gt;",
        "&lt;h1&gt;Hello WorldÆØÅ!&lt;/h1&gt;",
        "&lt;h1&gt;Hello WorldÆØÅ!&lt;/h1&gt; &lt;h1&gt;Hello WorldÆØÅ!&lt;/h1&gt;",
    );

    foreach ($str as $checkString) {
        if (!filter_var($checkString, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH) === false) {
            echo ("String is valid") ."<br>";
        }else {
            echo ("String is not valid") ."<br>";   
        }
    }
    ?>

    <?php
    $old = "<h1>Hello WorldÆØÅ!</h1>";
    $new = filter_var($old, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    echo $new ."<br>";
    ?>
</body>
</html>