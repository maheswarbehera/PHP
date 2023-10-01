
<?php
class pi {
  public static $value = 3.14159;
}

// Get static property
echo pi::$value;
?>


<?php
class pi {
  public static $value=3.14159;
  public function staticValue() {
    return self::$value;
  }
}

// Get static property
$pi = new pi();
echo $pi->staticValue();
?>

<?php
class Name {
  public static $value=3.14159;
}

class x extends Name {
  public function xStatic() {
    return parent::$value;
  } 
}

// Get value of static property directly via child class
echo x::$value;


// Get value of static property via xStatic() method
$x = new x();
echo $x->xStatic();
?>