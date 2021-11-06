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

   protected function intro(){
        echo "this car is <b> {$this->name} </b>, the model is <b> {$this->model} </b>, the color is <b> {$this->color} </b> and price is <b> {$this->price} </b> ";
    }
}


class Vego extends Car {
  public  function message(){
        echo "Yes I'm vigo ";
        $this->intro();
    }
}


$vego = new Vego("Vigo", "2019", "Black", "Rs: 400/-" );
$vego->message();

?>

