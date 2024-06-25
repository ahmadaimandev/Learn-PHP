<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms Handling</title>
</head>
<body>
    <h2>POST Method</h2>
    <div class="post-form">
        <form action="postdata.php" method="POST">
            <label for="Name">Username
                <input type="text" name="Uname" required>
            </label>
            <label for="Email">Email Address
                <input type="email" name="Uemail" required>
            </label>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>