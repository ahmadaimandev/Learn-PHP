<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feof function</title>
</head>

<body>
    <h2>Check end-of-file</h2>
    <?php
    $myFile = fopen("webdict.txt", "r") or die("Unable to open the file");
    // Output one line until end-of-file
    while(!feof($myFile)) {
        echo fgets($myFile);
    }
    fclose($myFile);
    ?>
</body>

</html>