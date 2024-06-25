<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP request</title>
</head>
<style>
    h2 {
        text-align: center;
        margin: 20px auto;
        text-transform: uppercase;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
</style>
<body>
    <h2>Using $_REQUEST on $_POST Requests</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <label for="">Username
            <input type="text" name="uName">
        </label>
        <input type="submit" value="Submit Form">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = htmlspecialchars($_REQUEST['uName']);
        if (empty($name)) {
            echo "Username Not Found!";
        } else {
            echo $name;
        }
    }
    ?>
</body>
</html>