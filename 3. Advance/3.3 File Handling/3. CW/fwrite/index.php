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
    $txt1 = "No More John Doe Is Mickey Here!\n";
    fwrite($myFile,$txt1);

    $txt2 = "Go Away Mickey!!\n";
    fwrite($myFile,$txt2);

    $txt3 = "Yeah!! Go Away You Mutant Mouse!\n";
    fwrite($myFile,$txt3);
    
    fclose($myFile);

    echo readfile("newfile.txt");
    ?>

    <?php
    //append text//
    $myFile = fopen("newfile.txt", "a") or die ("Unable to open the file!");
    $txt4 = "Mickey Mouse is a very funny mouse!\n";
    fwrite($myFile,$txt4);
    fclose($myFile);
    ?>
</body>
</html>