<?php
    //we can access a constant from inside the class by using the self keyword followed by the scope resolution operator (::) followed by the constant name, like here:
    class Greeting{
        const MESSAGE = "Good Morning!";
        public function message(){
            echo self::MESSAGE ."<br>";
        }
    }
    $greet = new Greeting();
    $greet->message();

    //We can access a constant from outside the class by using the class name followed by the scope resolution operator (::) followed by the constant name, like here:
    class Hello{
        const MESSAGE = "Welcome To PHP";
    }
    echo Hello::MESSAGE;
?>