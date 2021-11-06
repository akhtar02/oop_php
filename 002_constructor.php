

<?php

class Car {

    //class Properties
    public $name;
    public $company;
    public $model;
    public $color;
    public $price;

// Constructor

    function __construct($name, $company, $model, $color, $price){
        $this->name = $name;
        $this->company = $company;
        $this->model = $model;
        $this->color= $color;
        $this->price = $price;
    }
    //Method
    function get_name(){
        return $this->name;
    }
    function get_company(){
        return $this->company;
    }
    function get_model(){
        return $this->model;
    }
    function get_color(){
        return $this->color;
    }
    function get_price(){
        return $this->price;
    }
}
echo "Car List Description <br><br>";

// Objects 
$cultus = new Car("Cultus","suzuki", "2020","yellow","Rs: 24,43000/-");
$corolla = new Car("Corolla","Toyota", "2019","blue","Rs: 44,43000/-");
$alto = new Car("Alto","suzuki", "2017","red","Rs: 4,43000/-");


//Call Objects
echo $cultus->get_name();
echo "<br>";
echo $cultus->get_company();
echo "<br>";

echo $cultus->get_model();
echo "<br>";

echo $cultus->get_color();
echo "<br>";

echo $cultus->get_price();

echo "<br>";
echo "<br>";
echo "<br>";

echo $alto->get_name();
echo "<br>";
echo $alto->get_company();
echo "<br>";

echo $alto->get_model();
echo "<br>";

echo $alto->get_color();
echo "<br>";

echo $alto->get_price();

echo "<br>";
echo "<br>";
echo "<br>";



echo $corolla->get_name();
echo "<br>";
echo $corolla->get_company();
echo "<br>";

echo $corolla->get_model();
echo "<br>";

echo $corolla->get_color();
echo "<br>";

echo $corolla->get_price();






?>




