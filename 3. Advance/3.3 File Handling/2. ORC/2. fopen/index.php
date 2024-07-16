<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open/Read/Close</title>
</head>
<body>
    <?php
    //The first parameter of fopen() contains name of the file to be opened
    // and the second parameter specifies in which mode the file should be opened.

    $myFile = fopen("webdict.txt", "r") or die("Unable To Open The File");
    echo fread($myFile,filesize("webdict.txt"));
    fclose($myFile);
    ?>
</body>
</html>