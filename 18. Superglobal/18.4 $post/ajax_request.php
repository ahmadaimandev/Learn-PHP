<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Javascript HTTP REQUEST</title>
</head>
<style>
    h2 {
        text-align: center;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: 40px;
        margin: 20px auto;
    }
    button {
    width: 400px;
    height: 50px;
    border-radius: 5px;
    border: 1px solid black;
    background-color: white;
    display: block; /* Make the button a block element */
    margin: 50px auto; /* Center the button horizontally */
    text-align: center; /* Center the text inside the button */
    transition: 0.4s ease-in-out;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 20px;
    text-transform: uppercase;
    font-weight: bold;

    }

    button:hover {
    border: 1px solid;
    box-shadow: 4px 4px;
    cursor: pointer;
    }
</style>
<body>
    <h2>Using Javascript HTTP R>EQUEST</h2>
    <button onclick="myFunction()">Click Me</button>
    <h1 id="demo"></h1>
</body>
<script>
    function myFunction() {
        const xhttp = new XMLHttpRequest();
        xhttp.open("POST", "ajax_request.php");
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlended");
        xhttp.onload =function() {
            document.getElementById("demo").innerHTML = this.responseText;
        }
        xhttp.send("fname=Ahmad Aiman");
    }
</script>
</html>