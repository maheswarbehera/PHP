<?php
    class Student {
        public $name;
        public $rollno;

        function set_name($name) {
            $this->name = $name;
        }
        function get_name() {
            return $this->name;
        }

        function set_rollno($rollno) {
            $this->rollno = $rollno;
        }        
        function get_rollno() {
            return $this->rollno;
        }
    }
    $student1 = new Student();
    $student1->set_name('Maheswar');
    $student1->set_rollno(9);

    var_dump($student1 instanceof Student);

    echo "<br>";
    echo "Name : ". $student1->get_name();
    echo "<br>";
    echo "Rollno : ". $student1->get_rollno();

?>