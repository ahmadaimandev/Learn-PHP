<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$_GET request</title>
</head>
<style>
    form {
        width: 500px;
        margin: 20px auto;
        background-color: red;
        height: 500px;
    }
</style>
<body>
    <form action="getData.php" method="GET">
        <label for="uName">Username
            <input type="text" name="userName">
        </label>
        <label for="uEmail">Email
            <input type="email" name="userEmail">
        </label>
        <input type="submit" value="Get data PHP">
    </form>
</body>
</html>