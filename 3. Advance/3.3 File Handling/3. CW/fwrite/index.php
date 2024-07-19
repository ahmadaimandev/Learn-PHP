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
    $myFile = fopen("newfile.txt", "w") or die ("Unable to open the file!");
    $txt = "John Doe Was here\n";
    fwrite($myFile,$txt);

    
    ?>
</body>
</html>