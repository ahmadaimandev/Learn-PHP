<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destroy Session</title>
</head>
<body>
    <?php
    //remove all session variables
    session_unset();
    echo "<p>Session has been deleted</p>";

    //destroy session
    session_destroy();
    ?>
</body>
</html>