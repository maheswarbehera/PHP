<?php
class greetings {
  public static function welcome() {
    echo "Hello World!";
  }
  public function __construct() {
    self::welcome();
  }
}

new greetings();
?>
 

 <?php
class greeting {
  public static function welcome() {
    echo "Hello World!";
  }
}

class SomeOtherClass {
  public function message() {
    greeting::welcome();
  }
}
?>

<?php
class domain {
  protected static function getWebsiteName() {
    return "W3Schools.com";
  }
}

class domainW3 extends domain {
  public $websiteName;
  public function __construct() {
    $this -> websiteName = parent::getWebsiteName();
  }	
}

$domainW3 = new domainW3;
echo $domainW3 -> websiteName;
?>