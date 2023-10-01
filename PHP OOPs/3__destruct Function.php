<?php
    class Car{
        public $color;
        public $model;

        function __construct($color,$model) {
            $this->color = $color;
            $this->model = $model;
        }
        function __destruct(){
            echo "The car color is {$this->color} and model {$this->model}.";
        }
    }
    $volvo = new Car("Black","AD003");
?>
