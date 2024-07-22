<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Another way to print session</title>
</head>
<body>
    <?php
    print_r($_SESSION);
    /*
     * Output in array:
     * Array ( [username] => Jong-Wook Park [Id_number] => KOR-12345678 )
     */
    ?>
</body>
</html>