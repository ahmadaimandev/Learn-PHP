<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //fgets() used to read a single line from a file
    $myFile = fopen("webdict.txt", "r") or die ("Unable to open the file");
    echo fgets($myFile) ."<br>";
    fclose($myFile);
    // After a call to the fgets() function, the file pointer has moved to the next line.
    ?>
</body>
</html>