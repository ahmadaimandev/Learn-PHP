<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Modifiers</title>
</head>

<body>
    <?php
    echo "<h2>First example</h2>";
    class Fruit
    {
        public $name;
        public $color;
        public $weight;

        function set_name($n)
        {  // a public function (default)
            $this->name = $n;
        }
        protected function set_color($n)
        { // a protected function
            $this->color = $n;
        }
        private function set_weight($n)
        { // a private function
            $this->weight = $n;
        }
    }

    $mango = new Fruit();
    $mango->set_name('Mango'); // OK
    $mango->set_color('Yellow'); // ERROR
    $mango->set_weight('300'); // ERROR
    ?>
</body>

</html>