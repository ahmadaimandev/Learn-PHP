<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<style>

</style>
<body>
    <div class="form-background">
        <h3>Form Validation</h3>
        <form method="post" action="">
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
</body>
</html>