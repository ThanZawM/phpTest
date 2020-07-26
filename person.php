<!DOCTYPE html>
<html>
    <body>
        <?php
            class Person {
                public $name;
                public $address;
                function __construct($name, $address){
                    $this->name = $name;
                    $this->address = $address;
                }
                function showInfo(){
                    echo $this->name."<br>".$this->address."<br>";
                }
            }

            class Student extends Person {
                public $program;
                public $year;
                public $fee;
                function __construct($name, $address, $program, $year, $fee){
                    $this->name = $name;
                    $this->address = $address;
                    $this->program = $program;
                    $this->year = $year;
                    $this->fee = $fee;
                }
                function showInfo(){
                    echo $this->name."<br>".$this->address."<br>".$this->program."<br>".$this->year."<br>".$this->fee;
                }
            }

            class Staff extends Person {
                public $school;
                public $pay;
                function __construct($name, $address, $school, $pay){
                    $this->name = $name;
                    $this->address = $address;
                    $this->school = $school;
                    $this->pay = $pay;
                }
                function showInfo(){
                    echo $this->name."<br>".$this->address."<br>".$this->school."<br>".$this->pay."<br>";
                }
            }

            $student = new Student("Zaw", "Yangon", "Scholarship", 6, 200000);
            echo "<h4>Student Infomation</h4>";
            $student->showInfo();
            echo "<br>";
            $staff = new Staff("Myint", "Mandalay", "State1", 250000);
            echo "<h4>Staff Information</h4>";
            $staff->showInfo();
        ?>
    </body>
</html>