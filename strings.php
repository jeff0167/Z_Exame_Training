<?php require_once "../coolLib.php";

$str = "Hello, World! I'm jeff";
$length = strlen($str);
cw("The length of the string is $length characters.");
cw();

// find the index position of a word both case-sensitive and case-insensitive
$str = "This is a wow, aka world of warcraft";
$pos = strpos($str, "wow");
$posCaseInsensitive = stripos($str, "WOW");
cw("The word 'wow' starts at position $pos.");
cw();
cw("The word 'WOW' starts at position $posCaseInsensitive.");
cw();

// make a new string of a part of the first string
$str = "This is one piece";
$subStr = substr($str, 7, 5);
cw("Extracted substring: $subStr");
cw();
$subStr = substr($str, 7); // or to the end of the string
cw("Extracted substring: $subStr");
cw();
$subStr = substr($str, -2, 5); // or from the end of the string
cw("Extracted substring: $subStr");
cw();

// replace a word
$str = "This is a incient world";
$newStr = str_replace("ancient", "new", $str);
cw("Replaced substring: $newStr");
cw();

// trim
$str = "   This is a string wIth spaceS.  "; 
$trimmedStr = trim($str);
cw("Trimmed string: $trimmedStr");

cw("Count the word in: " . $str . " is: " . str_word_count($str));  // and we use . for concatenate or combine
cw(strtoupper($str));
cw(strtolower($str));
cw(strrev($str)); // reverse the string

$str = "   This is a string wIth spaceS.  again"; 
$wordList = explode(" ", $str);

foreach ($wordList as $word){
    cw($word);
}

$animalList = ["dog", "cat", "lizard", "fish", "tiger", "falcon"];

$animalString = implode($animalList);
cw($animalString);
cw();

cw("here comes a quote in a string \"Coding like poetry should be short and concise.\" ― Santosh Kalwar");
cw();
cw('here comes a quote in a string \'Coding like poetry should be short and concise.\' ― Santosh Kalwar');
cw();
cw("here comes a quote in a string \$Coding like poetry should be short and concise. ― Santosh Kalwar");


?>