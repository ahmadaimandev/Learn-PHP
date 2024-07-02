<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Class and Objects</title>
</head>
<body>
    <?php
    class fruits {
        //code goes here
        #In class variables are called properties
        public $name;
        public $color;

        //In class functions are called method
        function set_name($name) {
            $this->name = $name;           
        }

        function get_name() {
            return $this->name;
        }
    }

    $apple = new fruits();
    ?>
</body>
</html>