<?php
    abstract class Employee{
        public $name;
        public $id;

        public function __construct($id,$name){
            $this->name = $name;
            $this->id = $id;
        }
        abstract public function details();          
    }

    class Anilkumar extends Employee{
        public function details(){
            return " Id is $this->id <br> Name : $this->name. <br>";
        }
    }

    class Maheswar extends Employee{
        public function details(){
            return " Id is $this->id <br> Name : $this->name.<br>";
        }
    }

    $anil = new Anilkumar("001","Anil kumar Behera");
    echo $anil->details();

    $maheswar = new Maheswar("002","Maheswar Behera");
    echo $maheswar->details();
?>

<?php
    abstract class ParentClass{
        // Abstract method with an argument
        abstract public function prefixName($name);
    }

    class ChildClass extends ParentClass{
        public function prefixName($name)
        {
            if($name == "maheswar"){
                $prefix = "Mr";
            }elseif($name == "anil"){
                $prefix = "mrs";
            }else{
                $prefix ="";
            }
            return "{$prefix} {$name}";
        }
    }

    $class = new ChildClass;
    echo $class->prefixName('anil');
    echo "<br>";
    echo $class->prefixName('maheswar');
?>



<?php
abstract class ParentClass2 {
  // Abstract method with an argument
  abstract protected function prefixName($name);
}

class ChildClass2 extends ParentClass2 {
  // The child class may define optional arguments that is not in the parent's abstract method
  public function prefixName($name, $separator = ".", $greet = "Dear") {
    if ($name == "John Doe") {
      $prefix = "Mr";
    } elseif ($name == "Jane Doe") {
      $prefix = "Mrs";
    } else {
      $prefix = "";
    }
    return "{$greet} {$prefix}{$separator} {$name}";
  }
}

$class = new ChildClass2;
echo "<br>"; 
echo $class->prefixName("John Doe");
echo "<br>";  
echo $class->prefixName("Jane Doe");
?>
