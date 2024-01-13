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

    // reasons for getter and setter
    // can add calculation for another value like below, automatically by having set be a function and not a simple varialble
    // can enforce rules such as only allowing certain values like, only positive number values 
    // you can add logging that helps with debugging
    // make variables readable and not writable, either globally or just in this class scope
    // properties get and set are awesome and a standard
    // but it looks dumb and takes a lot of code in php
    // arguebly there can be simple scenarious where properties don't require these set and get functions
    // don't blindly follow standard without understanding why
    // in php the standard is really messy looking and I don't want to look at a mess if I don't have to

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