<?php
class greeting {
  public static function welcome() {
    echo "Hello World!";
  }
}

// Call static method
greeting::welcome();



class pi {
   // static properties
    public static $value = 3.14159;
  }
  
  // Get static property
  echo pi::$value;
?>


