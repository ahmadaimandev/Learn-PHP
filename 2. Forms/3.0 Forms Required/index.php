<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    ?>
</body>
</html>