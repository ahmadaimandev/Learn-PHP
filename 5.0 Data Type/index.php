<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Type</title>
</head>
<body>
    <h2 style="text-align: center;">PHP Data Type</h2>
    <ul>
        <li>Strings</li>
        <li>Integer</li>
        <li>Float AKA double</li>
        <li>Boolean</li>
        <li>Array</li>
        <li>Object</li>
        <li>NULL</li>
        <li>Resource</li>
    </ul>
    <?php
    //string can be any text inside quotes. You can use single or double quotes:
    $a = "Hello World!";
    $b = "Hello World!";

    echo "<h4>This is string data type</h4>";
    var_dump($a);
    echo "<br>";
    var_dump($b);
    echo "<br>";

    $c = 5679;
    /*
    - At least one digit
    - not have decimal point
    - positive or negative
    - can be specified in:
        1. Decimal (base 10)
        2. Hexadecimal (base 16)
        3. Octal (base 8)
        4. Binary (base 2) notation
    */
    echo "<h4>This is int data type</h4>";
    var_dump($c);

    $d = 10.365; //decimal point number or a number in exponential form
    echo "<h4>This is float data type</h4>";
    var_dump($d);

    echo "<h4>This is boolean data type</h4>";
    //Boolean represents two possible states: TRUE or FALSE.
    $e = True;
    $f = false;
    var_dump($e);
    echo "<br>";
    var_dump($f);

    //An array stores multiple values in one single variable.
    echo "<h4>This is array data type</h4>";    
    $MalaysianCars = array("Perodua", "Proton");
    $JapanCars = array("Mazda", "Toyota", "Nissan");
    var_dump($JapanCars);
    echo "<br>";
    var_dump($MalaysianCars);
    ?>
    
    <h2 style="text-align: center;">PHP Object</h2>
    <?php
    class Car {
        public $color;
        public $model;
        
        public function __construct($color, $model) { //__construct() php will automatically call this function
            $this->color = $color;
            $this->model = $model;
        }
        public function message() {
            return "My car is a " .$this->color. " " .$this->model. "!";
        }
    }

    $myCar = new Car("Red", "Perodua");
    var_dump($myCar);
    ?>

    <h2 style="text-align:center;">PHP Null Value</h2>
    <?php
    $text = "Hello World!";
    $nullvalue = null;

    var_dump($nullvalue);
    ?>

    <h2>Change Data Type</h2>
    <?php
    //example
    $num = 56;
    $num = (string) $num;
    var_dump($num);
    ?>
</body>
</html>