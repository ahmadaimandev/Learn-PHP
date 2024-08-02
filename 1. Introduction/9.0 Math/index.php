<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Math</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .note-card {
        background: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin: 20px;
        padding: 20px;
        border-radius: 10px;
        width: 80%;
        max-width: 600px;
        transition: transform 0.2s;
    }

    .note-card:hover {
        transform: scale(1.05);
    }

    h1 {
        font-size: 1.5em;
        color: #333;
        text-align: center;
        margin-bottom: 10px;
    }

    p {
        font-size: 1.2em;
        color: #555;
    }

    .note-explain {
        font-style: italic;
        text-align: center;
        font-size: 12px;
    }
</style>

<body>
    <h1>PHP Math Functions</h1>

    <div class="note-card">
        <h1>PHP - PI() Function</h1>
        <p class="note-explain">Return value of PI.</p>
        <p>Output: <?php echo pi(); ?></p>
    </div>

    <div class="note-card">
        <h1>PHP - min() and max() Functions</h1>
        <p class="note-explain">min() and max() functions can be used to find the lowest and highest value in a list of arguments.</p>
        <p>Output Min Value: <?php echo min(0, 150, 30, 20, -8, -200); ?></p>
        <p>Output Max Value: <?php echo max(0, 150, 30, 20, -8, -200); ?></p>
    </div>

    <div class="note-card">
        <h1>PHP - abs() Function</h1>
        <p class="note-explain">abs() function returns the absolute (positive) value of a numbers.</p>
        <p>Output Abs Value: <?php echo abs(-7.9); ?></p>
    </div>

    <div class="note-card">
        <h1>PHP - sqrt() Function</h1>
        <p class="note-explain">sqrt() function return the square root of number </p>
        <p>Square Root Value: 100</p>
        <p>Output Square Root Value: <?php echo sqrt(100); ?></p>
    </div>

    <div class="note-card">
        <h1>PHP - round() Function</h1>
        <p class="note-explain">round() function rounds a floating-point number to a nearest integer.</p>
        <p>Value: <?php echo 67.89; ?></p>
        <p>Output Round Value: <?php echo round(67.89); ?></p>
    </div>

    <div class="note-card">
        <h1>PHP - rand() Function</h1>
        <p class="note-explain">rand() function generates a random number</p>
        <p>Output Random Value: <?php echo rand(); ?></p>
        <p>Output Random Value (10 to 200): <?php echo rand(10, 200); ?></p>
    </div>
</body>

</html>