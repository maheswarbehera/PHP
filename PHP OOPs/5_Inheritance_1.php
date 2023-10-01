<?php

use Car as GlobalCar;

    class Car{
        public $name;
        public $color;
        public $model;

        public function __construct($name,$color,$model) {
                $this->name = $name;
                $this->color = $color;
                $this->model = $model;
        } 
        public function carinfo(){
            echo "the car name is {$this->name} and color {$this->color}, model is {$this->model}";
        }
    }
// Audi is inherited from Car
    class Audi extends Car{
        
        public function display(){
            echo "car details "."<br>";            
        }
    }

    $audi = new Audi("Audi","black","ASD23");
    $audi->display();
    $audi->carinfo();
?>