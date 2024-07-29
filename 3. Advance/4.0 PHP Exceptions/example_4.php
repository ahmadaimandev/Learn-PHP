<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Exception Object</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #f4f4f4;
    }

    h1 {
        color: #333;
        font-size: 24px;
        border-bottom: 2px solid #ddd;
        padding-bottom: 10px;
    }

    h2 {
        color: #666;
        font-size: 20px;
        margin-top: 20px;
    }

    p {
        font-size: 16px;
        line-height: 1.6;
    }

    code {
        background-color: #eee;
        padding: 2px 4px;
        border-radius: 4px;
        font-size: 16px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tr:hover {
        background-color: #f1f1f1;
    }

    strong {
        color: #333;
    }
</style>

<body>
<h1>The Exception Object</h1>
    <h2>The Exception Object contains information about the error or unexpected behaviour that the function encountered.</h2>
    <p>Syntax:<br>
        <code>new Exception(message, code, previous)</code>
    </p>

    <h3>Parameter Values</h3>
    <table>
        <tr>
            <th><strong>Parameter</strong></th>
            <th><strong>Description</strong></th>
        </tr>
        <tr>
            <td>message</td>
            <td>Optional. A string describing why the exception was thrown</td>
        </tr>
        <tr>
            <td>code</td>
            <td>Optional. An integer that can be used to easily distinguish this exception from others of the same type</td>
        </tr>
        <tr>
            <td>previous</td>
            <td>Optional. If this exception was thrown in a catch block of another exception, it is recommended to pass that exception into this parameter</td>
        </tr>
    </table>

    <h1>Methods</h1>
    <h2>When catching an exception, the following table shows some of the methods that can be used to get information about the exception:</h2>
    <table>
        <tr>
            <th><strong>Method</strong></th>
            <th><strong>Description</strong></th>
        </tr>
        <tr>
            <td>getMessage()</td>
            <td>Returns a string describing why the exception was thrown</td>
        </tr>
        <tr>
            <td>getPrevious()</td>
            <td>If this exception was triggered by another one, this method returns the previous exception. If not, then it returns null</td>
        </tr>
        <tr>
            <td>getCode()</td>
            <td>Returns the exception code</td>
        </tr>
        <tr>
            <td>getFile()</td>
            <td>Returns the full path of the file in which the exception was thrown</td>
        </tr>
        <tr>
            <td>getLine()</td>
            <td>Returns the line number of the line of code which threw the exception</td>
        </tr>
    </table>
</body>

</html>