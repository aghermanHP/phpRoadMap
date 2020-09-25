
<?php
abstract class  Student {
    protected $name;
    public $age;
        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }
        protected function getStudent(): Array{
            return [
                'name'=> $this->name,
                'age' => $this->age
            ];
        }
}

class StudentType extends Student{
    protected $type;
        public function __construct($name, $age, $type)
        {
            parent::__construct($name, $age);
            $this->type = $type;
        }

        public function getType(): Array{
            return [
                'student' => $this->getStudent(),
                'type' => $this->type
            ];
        }
}
$budgetStudent = new StudentType("adrian", 23, "budget");
var_dump($budgetStudent->getType())

?>
