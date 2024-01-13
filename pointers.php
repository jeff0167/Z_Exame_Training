<?php require_once "../coolLib.php";

function sayHi($val){
    echo "hi" . $val . "<br>";
}

$size = 4;

for ($i=0; $i < $size; $i++) { 
    sayHi($i);
}

// $username;

// if($username == null){
// cw("no user");
// }

cw();

function counting() {
    static $count = 0;
    $count++;
    cw($count);
  }

// static $count = 0;

// function counting() { 
//     $GLOBALS['count']++;
//     cw($GLOBALS['count']);
//   }
  
  counting(); // Output: 1
  counting(); // Output: 2

  function increaseMoney(&$val, $increaseValue = 1) { 
    $val += $increaseValue;
    //return $val + 1; // alternative way of setting the value
  }
//   function increaseMoney($val, $increaseValue = 1) { // pass by reference
//      $val += $increaseValue;
//   }

  $money = 100;
  increaseMoney($money);
  //$money = increaseMoney($money);
  cw($money);

?>