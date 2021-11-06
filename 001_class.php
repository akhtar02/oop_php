<?php
class Books{

    public $name;
    public $price;
    public $author;

    // Method Books Name

    function set_name($name){
         $this->name = $name;

    }
    function get_name() {
        return $this->name;
      }
   // Method Books author

    function set_author($author){
         $this->author = $author;

    }
    function get_author() {
        return $this->author;
      }

   // Method Books price

    function set_price($price){
         $this->price = $price;

    }
    function get_price() {
        return $this->price;
      }   
}
$obj = new Books();
$obj_1 = new Books();

echo"Books Description <br> <br>";

$obj->set_name('<b>30 days Javascript</b>');
$obj->set_author('Akhtar  Hussain');
$obj->set_price('Rs: 499/-');
echo $obj->get_name();
echo '<br>';
echo $obj->get_author();
echo '<br>';
echo $obj->get_price();
echo '<br>';

echo "<br><br>";

$obj_1->set_name('<b>30 days Python </b>');
$obj_1->set_author('Faisal Ghani');
$obj_1->set_price('Rs: 1999/-');
echo $obj_1->get_name();
echo '<br>';
echo $obj_1->get_author();
echo '<br>';
echo $obj_1->get_price();
echo '<br>';




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>