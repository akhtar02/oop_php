
<?php

class Car {
    // Properties
    public $name;
    public $color;

    // Constructor
    function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
        
    }

    // Destructure 

    function __destruct()
    {
        echo "The Car is <b> {$this->name} </b> and the color is  <b> {$this->color} </b>" ;
        
    }
}
// Object
$apple = new Car("Cultus", "yellow");


?>
