<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Forms Required</title>
</head>
<body>
    <?php
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    #define variables and set to empty values
    #This will hold error message for the required fields
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if(empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
        }

        if(empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
        }

        if(empty($_POST["website"])) {
            $websiteErr = "";
        } else {
            $website = test_input($_POST["website"]);
        }

        if(empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if(empty($_POST["gender"])) {
            $genderErr = "Please choose your gender";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }
    ?>

    <h2>Form Validation</h2>
    <div class="form-background">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
            <div class="user-info">
                <label for="User_Name">Username:
                    <input type="text" name="name" placeholder="Please enter your name">
                    <span class="error"><?php echo $nameErr;?></span>
                </label>
                <label for="User_Email">Email:
                    <input type="email" name="email" placeholder="Please enter your email:">
                    <span class="error"><?php echo $emailErr;?></span>
                </label>
                <label for="User_Website">Website:
                    <input type="text" name="website" placeholder="Enter your website address">
                    <span class="error"><?php echo $websiteErr;?></span>
                </label>
                <label for="User_Comment">Please leave your comment here:
                    <textarea name="comment" placeholder="Feedback..." rows="5" cols="40"></textarea>
                </label>
                <fieldset>
                    <legend>Choose your gender:</legend>
                    <label for="male"><input type="radio" id="male" name="gender" value="male"> Male</label>
                    <label for="female"><input type="radio" id="female" name="gender" value="female"> Female</label>
                    <label for="other"><input type="radio" id="other" name="gender" value="other"> Other</label>
                </fieldset>
                <input type="submit" value="Submit Form">
            </div>
        </form>
        <div class="output-form">
            
        </div>
    </div>
</body>
</html>