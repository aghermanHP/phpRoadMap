
<?php
abstract class  Student {
    protected $name;
    public $age;
        function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }
        function getStudent(){
            return [
                'name'=> $this->name,
                'age' => $this->age
            ];
        }
}

class StudentType extends Student{
    protected $type;
        function __construct($name, $age, $type)
        {
            parent::__construct($name, $age);
            $this->type = $type;
        }

        function getType(){
            return [
                'student' => $this->getStudent(),
                'type' => $this->type
            ];
        }
}
$budgetStudent = new StudentType("adrian", 23, "budget");
var_dump($budgetStudent->getType())

?>
