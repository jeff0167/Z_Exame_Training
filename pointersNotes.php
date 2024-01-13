<?php require_once "../coolLib.php";

// SUPER GLOBALS

// $GLOBALS
// $_SERVER
// $_REQUEST
// $_POST
// $_GET
// $_FILES
// $_ENV
// $_COOKIE
// $_SESSION

// constant: cannot change it's value after being declared
// const is always static and public, cannot be private
const pi = 3.14; // const doesn't change, it's constant, like readonly but like more defined, pi is a constant value that will never change

// can be used for local function scope as well, which retain their value even after the function has ended
// static keyword for properties and methods is public and can be accessed without making and instance of the class, perfect for math classes with methods that just needs to be stateless
static $pie = 2;
cw(pi);
cw($pie);

$pie = 4; // can be changed, but do so lightly
cw($pie);

// litearls are fixed values that are directly inserted into code
// variables are named memmory locations that can store values

// declared variable, not assigned or undefined, which has a null value
$username;

// declares and assigns the variable a value
$amount = 2;  // 2 is the literal and $amount is the variable name or just variable which then have the value of 2

// php have no unsigned attribute leading to forcing positive numbers with a setter method

function attack(){
    global $amount; // accesses the amount variable which is in global scope
    cw($GLOBALS['username']); // accesses the username variable which is in a array whith a index key to the variable, like an associative array
}

// php does not have pointers
// A PHP reference is an alias, which allows two different variables to write to the same value
// that can then simply change the value without dereferencing it like you would in c++
// references are simple float values, IMPORTANT THEY ARE CALLED REFERENCED, NOT POINTERS, WE DON'T POINT TO MEMORY WE DIRECTLY PASS THE REFFERENCE

function increaseMoney(&$val, $increaseValue = 1) {  // le function key word
    $val += $increaseValue;
    //return $val + 1; // alternative way of setting the value
  }
//   function increaseMoney($val, $increaseValue = 1) { // copy
//      $val += $increaseValue;
//   }

// scalar: data value types that can only hold one value at a time, like numbers, booleans and the like
// never actually send scalar values by reference, it becomes unclear what is happening and become hard to debug and you hardly gain any performance
// send array as references that you plan on modifying inside a function instead and other stuff

  $money = 100;
  increaseMoney($money);
  //$money = increaseMoney($money);
  cw($money);

  // A recursive function is a function that calls itself. Recursive functions are often used to solve problems that involve self-similar patterns.
  // For example, the following code defines a recursive function that calculates the factorial of a number:

  function factorial($n) {
    if ($n == 0) {
      return 1; // The factorial of 0 is 1
    } else {
      return $n * factorial($n - 1); // The factorial of n is n * the factorial of (n - 1)
    }
  }
  
  cw(factorial(0)); // Output: 120

?>