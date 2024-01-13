<?php require_once "../coolLib.php";

class Person{

    // access modifiers
    public string $name; // accessible from within and outside of this class scope
    private int $bankInfo; // only accessible from within this class, not inherited
    protected int $characterInfo; // can be accessed from within this class and from classes that inherit it, can then be overridden

    public int $swagAmount = 0;

    // built in speciel function
    function __construct($name, $age){ // overrides defualt constructor, can't use method overloading in php :(
        $this->setName($name); 
        $this->age = $age;     // now this line lacks cohesion to the constructor
    } 

    function __destruct()  // built in speciel function, this one commonly used for logging and debugging
    {
        cw($this->name . " is getting destroyed");
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

    public function setName($name){ // this kind of method is called a mutator, as it mutates private properties of it's class, mutating itself 
        $this->name = $name;
        $this->coolFactor();
    }
    function getName(){ // this kind of method is called a accessor, as it accesses private properties of it's class
        return $this->name;
    }
    function setAge($age){
        $this->age = $age;
    }
    function getAge(){
        return $this->age;          
    }

    private function coolFactor(){ 
        $this->swagAmount = pow(strlen($this->name), 2);
    }
    protected function characterSheet(){  // enables itself to be inherited and open to be overridden
        return $this->characterInfo;
    }
}
?>