<?php
    $myfile = fopen("newfile.txt", "w")
                or die("Unable to open file!");
    echo fgets($myfile);
    fclose($myfile);
?>