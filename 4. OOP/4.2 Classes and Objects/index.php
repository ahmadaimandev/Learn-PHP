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

        function set_color($color) {
            $this->color = $color;
        }

        function get_name() {
            return $this->name;
        }

        function get_color() {
            return $this->color;
        }
    }

    $apple = new fruits();
    $banana = new fruits();
    $mango= new fruits();

    $apple->set_name("Apple");
    $apple->set_color("Red");

    $banana-> set_name("Banana");
    $banana->set_color("Yellow");

    $mango-> set_name("Mango");
    $mango->set_color("Orangered");

    echo 'Fruits name: ' .$apple->get_name(). '<br>';
    echo 'Color: ' .$apple->get_color();
    echo '<br>';

    echo 'Fruits name: ' .$banana->get_name(). '<br>';
    echo 'Color: ' .$banana->get_color();
    echo '<br>';

    echo 'Fruits name: ' .$mango->get_name(). '<br>';
    echo 'Color: ' .$mango->get_color();
    echo '<br>';
    ?>

    <!--Two ways to change the value-->

    <?php
    #1. Inside the class
    #create new class
    class CarModel {
        //set properties
        public $CarName;

        //set method
        function set_CarName($CarName) {
            $this->CarName = $CarName;
        }
    }
    $Ford = new CarModel();
    $Ford->set_CarName("Mustang");
    echo "Ford Model: " .$Ford->CarName;
    ?>
</body>
</html>