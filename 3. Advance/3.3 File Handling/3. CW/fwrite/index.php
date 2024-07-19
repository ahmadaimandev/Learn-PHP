<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Write A File</h2>
    <?php
    $myFile = fopen("write.txt", 'w') or die("Unable to open file!");
    $txt = "John Doe Was Here\n";
    fwrite($myFile, $txt); 

    $txt = "Jane Doe Was Here Also\n";
    fwrite($myFile, $txt);
    fclose($myFile);
    ?>
</body>
</html>