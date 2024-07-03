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
    class fruit
    {
        //set properties
        public $name;
        public $color;

        //set method
        function __construct($name)
        {
            $this->name = $name;
        }

        function get_name()
        {
            return $this->name;
        }
    }
    $apple = new fruit("Apple");
    echo "Fruits Name: " . $apple->get_name();
    ?>

    <?php
    echo "<h2>Second Example</h2>";
    class fruits
    {
        //set properties
        public $fruitsName;
        public $fruitsColor;

        //set methods
        function __construct($fruitsName, $fruitsColor) //set two properties inside the constructor
        {
            $this->fruitsName = $fruitsName;
            $this->fruitsColor = $fruitsColor;
        }

        function get_fruitsName()
        {
            return $this->fruitsName;
        }

        function get_fruitsColor()
        {
            return $this->fruitsColor;
        }
    }
    $apple = new fruits("Apple", "red");
    echo $apple->get_fruitsName();
    echo "<br>";
    echo $apple->get_fruitsColor();

    ?>
</body>

</html>