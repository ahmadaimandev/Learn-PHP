<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Writing File</h2>
    <?php
    $myFile = fopen("newfile.txt", "w") or die("Unable to find the file");
    
    $txt = "Luke, Im your father";
    fwrite($myFile, $txt);

    $txt = "No You Are Not!!";
    fwrite($myFile, $txt);
    
    fclose($myFile);
    ?>
</body>
</html>