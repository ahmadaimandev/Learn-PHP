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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>PHP - Inheritance and the Protected Access Modifier</h2>
</body>
</html>