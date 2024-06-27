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
            <label for="name">Name:
                <input type="text" name="Username">
            </label>
            <label for="email">Email:
                <input type="email" name="UserEmail">
            </label>
            <label for="website">Website:
                <input type="text" name="UserWebsite">
            </label>
            <label for="comment">Leave your comment here:
                <textarea name="UserComment" rows="5" cols="40"></textarea>
            </label>
            <label for="gender">Please select your gender:</label>
            <input type="radio" name="UserGender"> Male
            <input type="radio" name="UserGender"> Female
            <input type="radio" name="UserGender"> Non-Binary
        </form>
    </div>
</body>
</html>