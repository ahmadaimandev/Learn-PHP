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
//strawberry is inherited from fruits
class strawberry extends Fruits {
    public function message() {
        echo "Am i a fruit or a berry?";
    }
}

$strawberry = new strawberry("Strawberry", "Red");
$strawberry->message();
$strawberry->intro() ;
?>