<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <title>Form URL/E-Mail</title>
</head>
<style>
    html {
        font-family: "Open Sans", sans-serif;
    }

    /* Container */
    .login-container {
        width: 300px;
        margin: 80px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #f9f9f9;
    }

    /* Title */
    .login-title {
        font-size: 24px;
        font-weight: bold;
        text-align: center;
        margin-bottom: 20px;
    }

    /* Input fields */
    .user-input {
        margin-bottom: 20px;
    }

    .name-label,
    .email-label,
    .website-label,
    .password-label {
        display: block;
        margin-bottom: 10px;
    }

    label {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"],
    select {
        width: calc(100% - 0px);
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    /* Job Role and Department dropdown */
    .job-role,
    .department-role {
        margin-bottom: 20px;
    }

    select {
        width: 100%;
    }

    /* Button */
    .button {
        text-align: center;
        margin-bottom: 20px;
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #4CAF50;
        color: white;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    /* Forgot Password and Create New Account */
    .forgot-password {
        text-align: center;
        margin-top: 20px;
    }

    .forgot-password p {
        margin: 0;
        font-size: 14px;
    }

    .forgot-password a {
        color: #4CAF50;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .forgot-password a:hover {
        color: #45a049;
    }

    .error {
        color: red;
    }

    .output-card {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        max-width: 400px;
        width: 100%;
        text-align: center;
    }

    .output-title {
        margin-top: 0;
        color: #333;
    }

    .output-content {
        text-align: left;
        color: #555;
    }

    .output-content h2 {
        margin-bottom: 10px;
        color: #444;
    }
</style>

<body>
    <?php
    function LoginFunction($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $usernameErr = $emailErr = $websiteErr = $passwordErr = "";
    $username = $email = $website = $password = $role = $department = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["username"])) {
            $usernameErr = "Name is required";
        } else {
            $username = LoginFunction($_POST["username"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/", $username)) {
                $usernameErr = "Only letters and white space allowed";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = LoginFunction($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
            // check if URL address syntax is valid
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                $websiteErr = "Invalid URL";
            }
        }
    }
    ?>

    <div class="login-container">
        <h1 class="login-title">Login</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="user-input">
                <div class="name-label">
                    <label for="User-Name">Name: <input type="text" name="username" placeholder="Enter your username"></label>
                    <span class="error"></span>
                </div>
                <div class="email-label">
                    <label for="User-Email">Email: <input type="email" name="email" placeholder="Enter your email"></label>
                    <span class="error"></span>
                </div>
                <div class="password-label">
                    <label for="User-Password">Password: <input type="password" name="password" placeholder="Enter your password:"></label>
                    <span class="error"></span>
                </div>
                <div class="website-label">
                    <label for="User-Website">Website: <input type="text" name="website" placeholder="Paste your website link here:"></label>
                    <span class="error"></span>
                </div>
            </div>
            <div class="job-role">
                <label for="User_Role">Role:
                    <select name="role" id="dropdown">
                        <option value="">--Select Your Role:--</option>
                        <option value="admin">Administrator</option>
                        <option value="doctor">Doctor</option>
                        <option value="nurse">Nurse</option>
                        <option value="clerk">Clerk</option>
                    </select>
                </label>
            </div>
            <div class="department-role">
                <label for="User_Role">Department:
                    <select name="role" id="dropdown">
                        <option value="">--Select Your Department:--</option>
                        <option value="deptAdmin">Department of Administrator</option>
                        <option value="deptDoctor">Department of Doctor</option>
                        <option value="deptNurse">Department of Nurse</option>
                        <option value="deptClerk">Department of Clerk</option>
                    </select>
                </label>
            </div>
            <div class="button">
                <input type="submit" value="Login">
            </div>
            <div class="forgot-password">
                <p><a href="">Forgot Password?</a> | <a href="">Create new account</a></p>
            </div>
        </form>
    </div>

    <div class="output-card">
        <h1 class="output-title">User Details</h1>
        <div class="output-content">
            <?php
            echo "<h2>Your Input:</h2>";
            echo "<p><strong>Username:</strong> " . htmlspecialchars($username) . "</p>";
            echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
            echo "<p><strong>Website:</strong> " . htmlspecialchars($website) . "</p>";
            echo "<p><strong>Role:</strong> " . htmlspecialchars($website) . "</p>";
            echo "<p><strong>Department:</strong> " . htmlspecialchars($website) . "</p>";
            echo "<p><strong>Password:</strong> " . htmlspecialchars($password) . "</p>";
            ?>
        </div>
    </div>
</body>

</html>