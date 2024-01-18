<?php require_once "../coolLib.php";


// there are indexed arrays and there are associative arrays
// 0,1,2,3  "kevin": 900   key value pairs

// //$games = array("Mario", "Wario", "tetris", "pacman", "uno", "baldurs gate 3", "elden ring"); // or like this
// $games = ["Mario", "Wario", "tetris", "pacman", "uno", "baldurs gate 3", "elden ring"];
// $games = array_reverse($games); // reverse array, nice if you want it to be sorted in a certain order
// array_push($games, "dark souls");
// $games[2] = "Teeeetris";
// unset($games[0], $games[1]); // remove item, but will not re-arrange the indexes of the items
// //cw($games[0]); // will now not work, very unliked behaviour

// array_splice($games, 1,1); // indexes gets re-arranged, yuubi, specifies the index and the range of items to remove, just one normaly
// array_pop($games); // removes last inserted item

// cw("Index of mario, then we can use it to call splice" . array_search("baldurs gate 3", $games));

// cwArray($games);
// var_dump($games);

// cw();
// $games = ["dark souls"=>"from software", "elden ring"=>"from software", "mario"=>"nintendo"];
// cw($games["dark souls"]);
// cw();
// cw("search associative array" . array_search("from software", $games));

// cwAssociativeArray($games);


$numbers = [2,7,49, 56, -1, 456, 4, 5];
cwArray($numbers);

cw();
//sort($numbers);
rsort($numbers);
//$numbers = array_reverse($numbers);
cwArray($numbers);

cw();
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);
cwArray($age);

?>