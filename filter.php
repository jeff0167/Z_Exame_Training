<?php require_once "../coolLib.php";


$email = "jhontravlota@hotmail.co m"; // valid
//$email = "jhontravlotahotmail.@com   "; // unvalid

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  cw("$email is a valid email address");
} else {
  cw("$email is not a valid email address");
}



//$url = "https://www.youtube.com"; // valid
$url = "https://www.youtube.com .com"; // unvalid

// Remove all illegal characters from a url like a space
$url = filter_var($url, FILTER_SANITIZE_URL); 

// Validate url
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
  cw("$url is a valid URL");
} else {
  cw("$url is not a valid URL");
}


?>