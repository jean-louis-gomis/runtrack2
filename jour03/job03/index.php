<?php

$str = "I'm sorry Dave I'm afraid I can't do that.";
$voyelles = "aeiouyI";
$x = 0;
while (isset($str[$x])) {
    $i = 0;
    while (isset($voyelles[$i])) {
        if ($str[$x] == $voyelles[$i]) 
            echo $str[$x];
            $i++;
        }
        $x++;
}