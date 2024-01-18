<?php require_once "../coolLib.php";

// \w and \W for all word characters or all non-word characters
// \d and \D for all digits and all none digit characters
// \s and \S for all spaces and all non-space characters

// () for grouping of characters             (c|r) at    cat and rat     
// {} for specify the number of characters   wo{2,5}ah
// [] for range of characters                a-zA-Z0-9

// (?=)  positive lookahead   like Date: 4 Aug 3PM   \d+(?=PM)    captures 3
// (?!)  negative lookahead   like Date: 4 Aug 3PM   \d+(?!PM)    captures 4

// (?<=) possitive lookbehind: (?<=) like Product Code: 1064 Price: $5     (?<=\$)\d+   captures 5
// (?<=) negative lookbehind:  (?<!) like Product Code: 1064 Price: $5     (?<!\$)\d+   captures 1064

//   *  0 or many
//   +  1 or many
//   ?  0 or omany, optional

//$namePattern = "/^[a-zA-Z]{3,20}$/";

function regex($pattern, $text){
    cw();
    echo "pattern: "  . $pattern . " text: " . $text;
    if (preg_match($pattern, $text)) {
        echo " : true";
    } else {
        echo " : false";
    }
}


$text = "d";
$pattern = "/^d[w]*$/";
regex($pattern, $text);

$text = "dw";
$pattern = "/^d[w]+$/";
regex($pattern, $text);

$text = "d";
$pattern = "/^d[w]?$/";
regex($pattern, $text);


