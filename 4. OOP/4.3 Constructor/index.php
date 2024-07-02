<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructor</title>
</head>
<body>
    <?php
    echo "<h2>First Example</h2>";
    class fruit {
        //set properties
        public $name;
        public $color;

        //set method
        function __construct($name) 
        {
            $this->$name;
        }
    }
    ?>
</body>
</html>