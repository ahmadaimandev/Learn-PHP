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
    //define variables and set to empty values
    $UsernameErr = $UserEmailErr = $GenderErr = $WebsiteErr = "";
    $Username = $UserEmail = $UserComment = $UserGender = $UserWebsite = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {

        #Username
        if(empty($_POST[$Username])) {
            $UsernameErr = "Username is required in this field";
        }
        else {
            $Username = test_input($_POST["UserName"]);
        }

        #User Email
        if(empty($_POST[$UserEmail])) {
            $UserEmailErr = "Username is required in this field";
        }
        else {
            $UserEmail = test_input($_POST["UserEmail"]);
        }

        #User Comment
        if (empty($_POST["UserComment"])) {
            $UserComment = "";
        } else {
            $UserComment = test_input($_POST["UserComment"]);
        }        

        #User Gender
        if(empty($_POST[$UserGender])) {
            $GenderErr = "Username is required in this field";
        }
        else {
            $UserGender = test_input($_POST["UserGender"]);
        }
        
        #User Website
        if(empty($_POST[$UserWebsite])) {
            $UserWebsiteErr = "Username is required in this field";
        }
        else {
            $UserWebsite = test_input($_POST["UserWebsite"]);
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <div class="form-background">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="user-info">
                <label for="UserName"><b>Username</b>

                </label>
            </div>
            <div class="user-comment"></div>
            <div class="user-gender"></div>
            <div class="button-submit">
                <input type="Submit" value="Submit Form Application">
            </div>
        </form>
    </div>
</body>
</html>