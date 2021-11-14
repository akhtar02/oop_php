<?php

abstract class Car {
    public $name;
    public $model;
    public $color;
    public $price;


    public function __construct($name, $model, $color,$price)
    {
        $this->name = $name;
        $this->model = $model;
        $this->color = $color;
        $this->price = $price;
    }

    abstract public function intro() : string;

}

class Cultus extends Car {
    public function intro() : string {
        return "Choose Japanies Quality!i'm an <b> $this->name </b> band model is <b> $this->model </b> and color is <b> $this->color </b>  and price is <b> $this->price </b> ";
    }
}

class Mercidies extends Car {
    public function intro() : string {
        return "Choose German Quality! i'm an <b> $this->name </b> band model is <b> $this->model </b> and color is <b> $this->color </b>  and price is <b> $this->price </b>";
    }
}


// Create objects from the child classes
$cultus = new Cultus("cultus", "2017", "red", "Rs: 12,300,300");
echo $cultus->intro();
echo "<br>";


// Create objects from the child classes
$mercidies = new Mercidies("Mercidies", "2021", "Black", "Rs: 442,300,300");
echo $mercidies->intro();
echo "<br>";

?>