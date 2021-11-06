

<?php

class Car {
    public $name;
    public $model;
    public $color;
    public $price;


    function __construct($name, $model, $color, $price)
    {
        $this->name= $name;
        $this->model= $model;
        $this->color = $color;
        $this->price = $price;
    }

    function intro(){
        echo "this car is {$this->name}, the model is {$this->model}, the color is {$this->color} and price is {$this->price} ";
    }
}


class Vego extends Car {
    function message(){
        echo "Yes I'm vigo";
    }
}


$vego = new Vego("Vigo", "2019", "Black", "Rs: 400/-" );
$vego->message();
$vego->intro();
?>