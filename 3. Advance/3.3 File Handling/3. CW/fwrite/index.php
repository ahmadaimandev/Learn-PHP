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
    $myfile = fopen("note.txt", "w") or die("Unable to open the file");
    $txt1 = "John Doe\n";
    fwrite($myfile, $txt1);

    $txt2 = "John Doe\n";
    fwrite($myfile, $txt2);

    fclose($myfile);
    ?>
</body>
</html>