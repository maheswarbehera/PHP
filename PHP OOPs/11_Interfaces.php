<?php
    interface Student{
        public function rollno();
    }
    class Anil implements Student{
        public function rollno(){
            echo "Anil roll no is 1 <br>";
        }
    }
    class Mahesh implements Student{
        public function rollno(){
            echo "Mahesh roll no is 2 <br>";
        }
    }
    class Jyoti implements Student{
        public function rollno(){
            echo "Jyoti roll no is 3 <br>";
        }
    }
    $anil = new Anil();
    //$Anil->rollno();
    $mahesh = new Mahesh();
    $jyoti = new Jyoti();

    $students = array($anil,$mahesh,$jyoti);

    foreach ($students as $value) {
        $value->rollno();
    }

?> 