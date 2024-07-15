<?php
class Fruits {
    public $name;
    public $color;
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    public function intro() {
        echo "The fruit is {$this->name} and the color is: {$this->color}";
    }
}

class strawberry extends Fruits { //strawberry is inherited from fruits
    //this mean strawberry class can use the public $name and $color properties as well as the public__construct() and intro() methods from
    //fruit class
    public function message() {
        echo "Am i a fruit or a berry?";
    }
}

$strawberry = new strawberry("Strawberry", "Red");
$strawberry->message();
$strawberry->intro() ;
?>