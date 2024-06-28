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
<style>
    html {
        font-family: "Poppins", sans-serif;
    }
    body {
    background-color: #f4f4f9;
    margin: 0;
    padding: 20px;
}

h2 {
    text-align: center;
    color: #333;
}

.form-background {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    max-width: 600px;
    margin: 0 auto;
}

.user-info label {
    display: block;
    margin-bottom: 15px;
    color: #555;
}

.user-info label span {
    display: inline-block;
    margin-bottom: 5px;
    font-weight: bold;
}

.user-info input[type="text"],
.user-info input[type="email"],
.user-info textarea {
    width: calc(100% - 20px);
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.user-info textarea {
    resize: vertical;
}

.user-info .error {
    color: red;
    font-size: 0.875em;
}

fieldset {
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 4px;
}

legend {
    padding: 0 10px;
    font-weight: bold;
}

.user-info input[type="radio"] {
    margin-right: 5px;
}

input[type="submit"] {
    display: block;
    width: 100%;
    padding: 10px;
    border: none;
    background: #5cb85c;
    color: white;
    font-size: 1em;
    border-radius: 4px;
    cursor: pointer;
    margin-top: 10px;
}

input[type="submit"]:hover {
    background: #4cae4c;
}

.output-form {
    background: #e9ecef;
    padding: 10px;
    border-radius: 8px;
    margin-top: 20px;
}

.output-form h2 {
    color: #333;
}

.output-form p {
    color: #555;
}
</style>

<body>
    <?php
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    #define variables and set to empty values
    #This will hold error message for the required fields
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["name"])) {
            $nameErr = "*Name is required";
        } else {
            $name = test_input($_POST["name"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "*  Email is required";
        } else {
            $email = test_input($_POST["email"]);
        }

        if (empty($_POST["website"])) {
            $websiteErr = "";
        } else {
            $website = test_input($_POST["website"]);
        }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Please choose your gender";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }
    ?>

    <h2>Form Validation</h2>
    <div class="form-background">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
            <div class="user-info">
                <label for="User_Name">Username:
                    <input type="text" name="name" placeholder="Please enter your name">
                    <span class="error"><?php echo $nameErr; ?></span>
                </label>
                <label for="User_Email">Email:
                    <input type="email" name="email" placeholder="Please enter your email:">
                    <span class="error"><?php echo $emailErr; ?></span>
                </label>
                <label for="User_Website">Website:
                    <input type="text" name="website" placeholder="Enter your website address">
                    <span class="error"><?php echo $websiteErr; ?></span>
                </label>
                <label for="User_Comment">Please leave your comment here:
                    <textarea name="comment" placeholder="Feedback..." rows="5" cols="40"></textarea>
                </label>
                <fieldset>
                    <legend>Choose your gender:</legend>
                    <div class="radio-button">
                    <input type="radio" 
                    id="male" 
                    name="gender" 
                    value="male">
                    <label for="male">Male</label>
                    </div>
                    <div class="radio-button"></div>
                    <div class="radio-button"></div>
                    
                    <label for="female">Female
                        <input type="radio" id="female" name="gender" value="female">
                    </label>
                    <label for="other">Other
                        <input type="radio" id="other" name="gender" value="other">
                    </label>
                </fieldset>
                <input type="submit" value="Submit Form">
            </div>
        </form>
        <div class="output-form">
            <?php
            echo "<h2>Output from the form:</h2>";
            echo $name;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $website;
            echo "<br>";
            echo $comment;
            echo "<br>";
            echo $gender;
            ?>
        </div>
    </div>
</body>

</html>