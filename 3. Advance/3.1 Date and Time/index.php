<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Get A Date</h2>
    <p>Date Format</p>
    <?php
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . date("l");
    ?>

    <h2>Automatic Copyright year</h2>
    <p>&copy;Since 2010 - <?php echo date("Y");?></p>

    <h2>Get A Time</h2> 
    <?php echo "Time is: " .date("H:i:sa");?>

    <h2>Get Your Timezone</h2>
    <?php
    date_default_timezone_set("Asia/Kuala_Lumpur");
    echo "The time is: " .date("H:i:sa");
    ?>

    <h2>mktime() functions</h2>
    <?php
    //mktime(hour, minute, second, month, day, year)
    $d = mktime (15, 56, 23, 03, 02, 2004);
    echo "Time created is: " .date("h:i:sa Y-m-d ", $d);
    ?>

    <h2>Create date from string</h2>
    <?php
    //strtotime(time, now)
    $stringtotime = strtotime("10:30PM 15 July 2024");
    echo "Created dated is: " .date("d-m-Y H:i:sa", $stringtotime) ."<br>";
    
    ?>
</body>

</html>