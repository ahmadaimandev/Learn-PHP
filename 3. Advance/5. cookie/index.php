<?php
    $cookie_name = "user";
    $cookie_value = "Alex Porter";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day  1 day=24×60×60=86400 seconds

    //set the expiration date to one hour
    setCookie("user", "",time() - 3600);
    ?>
<!-- Note: The setcookie() function must appear BEFORE the <html> tag. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <h2>PHP Create/Retrieve a Cookie</h2>
    <?php
    if (!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
    ?>

    <?php
    echo "Cookie user has been deleted";
    ?>
    
    <?php
    //Check if cookies are enabled//
    //This example creates a small script that checks wheater cookies are enabled or not.
    ?>
</body>
</html>