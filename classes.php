<?php require_once "../coolLib.php";

// double, well it has double the precision than a float

class Person{
    private string $name;
    private int $age;

    public int $swagAmount = 0;

    function __construct($name, $age){ // overrides defualt constructor, can't use method overloading in php :(
        $this->setName($name); 
        $this->age = $age;     // now this line lacks cohesion to the constructor
    } 

    public function setName($name){
        $this->name = $name;
        $this->coolFactor();
    }
    function getName(){ 
        return $this->name;
    }
    function setAge($age){
        $this->age = $age;
    }
    function getAge(){
        return $this->age;          
    }

    private function coolFactor(){ // no one is allowed to call this function from outside of this class
        $this->swagAmount = pow(strlen($this->name), 2);
    }
}


$kevin = new Person("kevin", 22);

cw($kevin->getAge());

cw($kevin->swagAmount);

?>