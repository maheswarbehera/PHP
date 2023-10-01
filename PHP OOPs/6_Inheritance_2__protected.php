<?php
    class Car {
        public $name;
        public $color;
        public $model;

        public function __construct($name,$color,$model)
        {
            $this->name = $name;
            $this->color = $color;
            $this->model = $model;
        }
        protected function carinfo(){
            echo "the car name is {$this->name} and color is {$this->color}, model {$this->model}" ;
        }
    }

    class Audi extends Car{

        public function display(){          
            echo "car details "."<br>";            
        }
    }
    // Try to call all three methods from outside class
    $audi = new Audi("Audi","Red","AS21");
    $audi->display();
    $audi->carinfo();
?>

