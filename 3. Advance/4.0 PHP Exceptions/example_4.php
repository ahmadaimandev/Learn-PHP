<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Exception Object</title>
</head>
<style>
    code {
        background-color: lightgray;
        padding: 5px;
        border-radius: 5px;
    }
</style>

<body>
    <h1>The Exception Object</h1>
    <h2>The Exception Object contains information about the error or unexpected behaviour that the function encountered.
    </h2>
    <p>syntax <br>
        <code>
        new Exception(message, code, previous)
        </code>
    </p>

    <h3>Parameter Values</h3>

    <table>
        <tr>
            <th><strong>Parameter</strong></th>
            <th><strong>Description</strong></th>
        </tr>
        <tr>
            <td>message</td>
            <td>code</td>
            <td>previous</td>
        </tr>
        <tr>
            <td>Optional. A string describing why the exception was thrown</td>
            <td>Optional. An integer that can be used to easily distinguish this exception from others of the same type
            </td>
            <td>Optional. If this exception was thrown in a catch block of another exception,
                it is recommended to pass that exception into this parameter</td>
        </tr>
    </table>
</body>

</html>