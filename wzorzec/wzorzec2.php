<?php
$wzorzec = '/\d/';
$tekst = "mam 4 zeszyty";
if( preg_match( $wzorzec, $tekst ) )
    echo "znaleziono cyfre";
else
    echo "nie znaleziono cyfry";
echo "<br>znaleziono: " . preg_match_all( $wzorzec, $tekst );
?>
