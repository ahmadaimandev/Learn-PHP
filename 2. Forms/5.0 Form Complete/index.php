<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Form Validation</title>
</head>
<style>

</style>
<body>
    <?php
    //declaring error and empty variables
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
            // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                $websiteErr = "Invalid URL";
            }
        }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }
      
    ?>
    <div class="form-title">
        <h2>Form Complete Validation</h2>
        <div class="form-background">
            <form method="post" action="">
                <div class="user-input">
                    <label for="name">Name: <input type="text" name="name" placeholder="Enter your name:"></label>
                    <label for="email">Email: <input type="email" name="email" placeholder="Enter your email:"></label>
                    <label for="website">Website: <input type="text" name="website" placeholder="paste website link here:"></label>
                </div>
                <div class="user-comment">
                    <label for="comment">Feedback</label>
                    <textarea name="comment" id="user_comment" placeholder="Please leave a feedback" rows="5" cols="40"></textarea>
                </div>
                <div class="user-gender">
                    <input type="radio" name="gender" value="male" id="male-gender">
                    
                    <label for="male-gender">Male</label>
                    <input type="radio" name="gender" value="female" id="female-gender"> 
                    <label for="female-gender">Female</label>
                    <input type="radio" name="gender" value="other" id="other-gender">
                    <label for="other-gender">Other</label>
                </div>
                <div class="submit-button">
                    <input type="submit" value="Submit Feedback">
                </div>
            </form>
        </div>
    </div>
</body>
</html>