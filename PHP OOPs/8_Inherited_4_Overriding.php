<?php
    class Fruit {
        public $name;
        public $color;

        public function __construct($name,$color)
        {
            $this->name = $name;
            $this->color = $color;
        }
        public function info(){
            echo "The Fruit {$this->name} and color is{$this->color}";
        }
    } 

    class Apple extends Fruit {
        public $name;
        public $color;
        public $weight;

        public function __construct($name,$color,$weight)
        {
            $this->name = $name;
            $this->color = $color;
            $this->weight = $weight;
        }
        public function info(){
            echo "The Fruit {$this->name}, color is {$this->color} and weight {$this->weight} gram.";
        }
    }
    
    $apple = new Apple("Apple","Red",100);
    $apple->info();
?>      