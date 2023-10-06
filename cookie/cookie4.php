<?php
$cookie_name = "promocja";
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named "  .  $cookie_name . " is set!<br>";
} else {
    echo "Cookie " . $cookie_name . " is set!<br>";    
    echo "Value is: " . $_COOKIE[$cookie_name];
}  


setcookie($cookie_name,"",time()-3600);


if(!isset($_COOKIE[$cookie_name])){
    echo "cookie named ".$cookie_name. " is not set";
}
?>