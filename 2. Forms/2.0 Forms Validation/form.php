<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<style>
    html {
        font-family: Verdana, Geneva, Tahoma, sans-serif
    }

    body {
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .form-background {
        background-color: #fff;
        padding: 20px;
        max-width: 500px;
        margin: 50px auto;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }

    h3 {
        text-align: center;
        color: #333;
    }

    label {
        display: block;
        margin: 8px 0 5px;
        color: #333;
    }

    input[type="text"],
    input[type="email"],
    textarea {
        width: calc(100% - 20px);
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    fieldset {
        border: none;
        padding: 0;
        margin: 15px 0;
    }

    legend {
        font-weight: bold;
        margin-bottom: 10px;
        color: #333;
    }

    input[type="radio"] {
        margin-right: 10px;
    }

    input[type="submit"] {
        background-color: #3DC2EC;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        display: block;
        margin: 20px auto;
        width: 200px;
        font-weight: bold;
        text-transform: uppercase;
    }

    input[type="submit"]:hover {
        background-color: #4B70F5;
    }
    .output {
            background-color: #fff;
            padding: 20px;
            max-width: 500px;
            margin: 50px auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .output h2 {
            text-align: center;
            color: #333;
        }

        .output p {
            margin: 10px 0;
            color: #555;
        }

        .output .label {
            font-weight: bold;
            color: #333;
        }
</style>

<body>

    <div class="form-background">
        <h3>Form Validation</h3>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="username">Name:
                <input type="text" id="username" name="Username">
            </label>
            <br>
            <label for="email">Email:
                <input type="email" id="email" name="UserEmail">
            </label>
            <br>
            <label for="website">Website:
                <input type="text" id="website" name="UserWebsite">
            </label>
            <br>
            <label for="comment">Leave your comment here:
                <textarea id="comment" name="UserComment" rows="5" cols="40"></textarea>
            </label>
            <br>
            <fieldset>
                <legend>Please select your gender:</legend>
                <label for="male">
                    <input type="radio" id="male" name="UserGender" value="male"> Male
                </label>
                <label for="female">
                    <input type="radio" id="female" name="UserGender" value="female"> Female
                </label>
                <label for="nonBinary">
                    <input type="radio" id="nonBinary" name="UserGender" value="non-binary"> Non-Binary
                </label>
            </fieldset>
            <br>
            <input type="submit" value="Submit Form">
        </form>
    </div>

    <?php
    # Define variables and set them to empty values
    $Username = $UserEmail = $UserWebsite = $UserGender = $UserComment = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Username = test_input($_POST["Username"]);
        $UserEmail = test_input($_POST["UserEmail"]);
        $UserWebsite = test_input($_POST["UserWebsite"]);
        $UserComment = test_input($_POST["UserComment"]);
        $UserGender = isset($_POST["UserGender"]) ? test_input($_POST["UserGender"]) : "";
    }

    function test_input($data)
    {
        if ($data === null) {
            return "";
        }
        $data = trim($data);
        #Strip unnecessary characters (extra space, tab, newline) from the user input data (with the PHP trim() function)
        $data = stripslashes($data);
        #Remove backslashes \ from the user input data (with the PHP stripslashes() function)
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <div class="output">
    <?php
    echo "<h2>Your Input:</h2>";
    echo "<p><span class='label'>Name:</span> " . $Username . "</p>";
    echo "<p><span class='label'>Email:</span> " . $UserEmail . "</p>";
    echo "<p><span class='label'>Website:</span> " . $UserWebsite . "</p>";
    echo "<p><span class='label'>Comment:</span> " . $UserComment . "</p>";
    echo "<p><span class='label'>Gender:</span> " . $UserGender . "</p>";
    ?>
    </div> 
</body>
</html>