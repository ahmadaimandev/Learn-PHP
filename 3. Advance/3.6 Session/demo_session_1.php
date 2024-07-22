<!-- Note: The session_start() function must be the very first thing in your document. Before any HTML tags. -->
<?php
    //start new php session
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Session Variables</title>
</head>
<body>
    <h1>PHP Session</h1>
    <?php
    //Set session variable
    $_SESSION["username"] = "ParkJinHyeok";
    $_SESSION["Id_number"] = "KOR-343535";
    echo "Session variable set!";
    ?>
</body>
</html>