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
    $myFile = fopen("starwars.txt", "w") or die("Unable to open the file");
    $txt = "This is John Doe. Luke I'm Your Father\n";
    fwrite( $myFile, $txt );
    $txt = "NOOOOOOOOO!!!!\n";
    fwrite( $myFile, $txt );
    fclose( $myFile );
    ?>
</body>
</html>