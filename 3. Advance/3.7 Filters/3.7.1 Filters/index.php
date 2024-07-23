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
    /**
     * In the example, 
     * if $int was set to 0, the function above will return "Integer is not valid". 
     * To solve this problem, use the code below:
     */
    $int = 0;
    if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
        echo ("Integer is valid");
    }else {
        echo ("Integer is not valid") . "<br>";
    }
    ?>

    <h2>Validate An IP Address</h2>
    <?php
    /**
     * The following example uses the filter_var() function to check if the variable $ip is a valid IP address:
     */
    $LocalIP = "10.150.245.45";
    if (!filter_var($LocalIP, FILTER_VALIDATE_IP) === false) {
        echo ("IP Address is valid");
    }else {
        echo ("IP Address is not valid") . "<br>";
    }
    ?>

    <h2>Sanitize and Validate an Email Address</h2>
    <?php
    /**
     * The following example uses the filter_var() function to first remove all 
     * illegal characters from the $email variable, 
     * then check if it is a valid email address:
     */
    $UserEmail = array(
        "aimanzulbahari@gmail.com",
        "aimanzulbahari@yahoo.com",
        "aimanzulbahari@hotmail.com",
        "aimanzulbaharifdfd@ffrfrf.com",
        4545454
    );
    //looping through the array and checking if the email is valid or not.
    foreach ($UserEmail as $EmailList) {
        echo "Email Address: " . $EmailList . "<br>";
        $EmailList = filter_var($EmailList, FILTER_SANITIZE_EMAIL);
        if (!filter_var($EmailList, FILTER_VALIDATE_EMAIL) === false) {
            echo "Email Address is valid" ."<br>";
        }else {
            echo ("Email Address is not valid") . "<br>";
        }
    }
    ?>

    <h2>Sanitize and Validate URL</h2>
    <?php
    /**
     * The following example uses the filter_var() function to first remove all illegal characters from a URL, 
     * then check if $url is a valid URL:
     */

     $url = array(
        "https://www.google.com",
        "http://www.google.com",
        "www.google.com",
        "google.com",
        "www.google.com/search?q=php",
        "google.com/search?q=php",
        "https://www.google.com/search?q=php",
        "http://www.google.com/search?q=php",
        "https://www.google.com/search?q=php&oq=php",
        "http://www.google.com/search?q=php&oq=php",
     );

     foreach ($url as $urlList) {
        echo "url name: " . $urlList . "<br>";

        //remove all illegal characters from the url
        $urlList = filter_var($urlList, FILTER_SANITIZE_URL);

        //validate the url
        if (!filter_var($urlList, FILTER_VALIDATE_URL) === false) {
            echo "URL is valid" ."<br>";
        }else {
            echo ("URL is not valid") . "<br>";
        }
     }
    ?>

    <h2>Check The Value Is INteger Or Not</h2>
</body>

</html>