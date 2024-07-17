<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fgetc</title>
</head>
<body>
    <h2>fgetc</h2>
    <?php
    $myfile = fopen("ref_role.json","r") or die("Unable to open  the file");
    while(!feof($myfile)) {
        echo fgets($myfile);
    }
    fclose($myfile);
    ?>
</body>
</html>