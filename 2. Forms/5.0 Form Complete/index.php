<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Form Validation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<style>
body {
    font-family: "Lato", sans-serif;
    background-color: #f0f2f5;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.form-title {
    background-color: #ffffff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 400px;
}

.form-title h2 {
    margin-top: 0;
    font-size: 24px;
    color: #333;
}

.form-background {
    margin-top: 20px;
}

.user-input, .user-comment, .user-gender, .submit-button {
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

input[type="text"], input[type="email"], textarea {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 14px;
}

.user-gender input[type="radio"] {
    margin-right: 10px;
    margin-top: 10px;
}

.user-gender label {
    display: inline-block;
    margin-right: 15px;
    font-weight: normal;
}

.submit-button input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

.error {
    color: red;
    font-size: 12px;
    font-weight: normal;
}

.submit-button input[type="submit"]:hover {
    background-color: #0056b3;
}

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
        }else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $nameErr = "Only letters and white space allowed";
            }
        }

        if(empty($_POST["email"])) {
            $emailErr = "Email is required";
        }else {
            $email = test_input($_POST["email"]);
            //check email address is well formed
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        if(empty($_POST["website"])) {
            $websiteErr = "";
        }else {
            //check the website address
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                $websiteErr = "Invalid URL";
            }
        }

        if(empty($_POST["comment"])) {
            $commentErr = "";
        }else {
            $comment = test_input($_POST["comment"]);
        }

        if(empty($_POST["genders"])) {
            $genderErr = "Gender is required";
        }else {
            $gender = test_input($_POST["gender"]);
        }

    }
    ?>
    <div class="form-title">
        <h2>Form Complete Validation</h2>
        <div class="form-background">

            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="user-input">
                    <label for="name">Name: 
                        <span class="error">*<?php echo $nameErr;?></span>
                        <input 
                        type="text" 
                        name="name" 
                        placeholder="Enter your name:"
                        value="<?php echo $name;?>">
                        </label>
                    <label for="email">Email: 
                        <span class="error">*<?php echo $emailErr;?></span>
                        <input 
                        type="email" 
                        name="email" 
                        placeholder="Enter your email:">
                    </label>
                    <label for="website">Website: 
                        <span class="error"><?php echo $websiteErr;?></span>
                        <input 
                        type="text" 
                        name="website" 
                        placeholder="paste website link here:">
                    </label>
                </div>
                
                <div class="user-comment">
                    <label for="comment">Feedback</label>
                    <textarea 
                    name="comment" 
                    id="user_comment" 
                    placeholder="Please leave a feedback" 
                    rows="5" 
                    cols="40">
                    </textarea>
                </div>

                <div class="user-gender">
                <span class="error">*<?php echo $genderErr;?></span>
                    <legend>Choose your gender:</legend>
                    <input 
                    type="radio" 
                    name="gender" 
                    value="male" 
                    id="male-gender">
                    <?php if (isset($gender) && $gender == "male") echo "checked";?>
                    <label for="male-gender">Male</label>

                    <input 
                    type="radio" 
                    name="gender" 
                    value="female" 
                    id="female-gender"> 
                    <?php if (isset($gender) && $gender == "female") echo "checked";?>
                    <label for="female-gender">Female</label>

                    <input 
                    type="radio" 
                    name="gender" 
                    value="amazon" 
                    id="other-gender">
                    <?php if (isset($gender) && $gender == "amazon") echo "checked";?>
                    <label for="other-gender">Amazon</label>

                    <input 
                    type="radio" 
                    name="gender" 
                    value="other" 
                    id="other-gender">
                    <?php if (isset($gender) && $gender == "other") echo "checked";?>
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