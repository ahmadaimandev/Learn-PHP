<?php
echo "<h1>The try...catch...finally Statement</h1>";
echo "<h2>Example 2</h2>";
echo "<p>Show a message when an exception is thrown and then indicate that the process has ended:</p>";

function divideoperation($dividen, $divisor)
{
    if ($divisor == 0) {
        throw new Exception("Division by Zero");
    }
    return $dividen / $divisor;
}

try {
    echo divideoperation(5, 0);
} catch (Exception $e) {
    echo "Unable to divide. ";
} finally {
    echo "Process Complete";
}

?>