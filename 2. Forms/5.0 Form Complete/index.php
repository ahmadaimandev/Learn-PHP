<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Form Validation</title>
</head>
<body>
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