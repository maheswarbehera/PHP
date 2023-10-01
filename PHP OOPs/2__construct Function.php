<?php
    class Car{
        public $brand;
        public $model;
        public $color;

        function __construct($brand,$model) {
            $this->brand = $brand;
            $this->model = $model;
        }
        function get_brand(){
            return $this->brand;
        }
        function get_model(){
            return $this->model;
        }
    }
    $volvo = new Car("Audi","XY01");
    echo $volvo->get_brand()."<br>";
    echo $volvo->get_model();
?>

