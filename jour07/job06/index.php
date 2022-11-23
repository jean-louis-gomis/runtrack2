<?php

$str = " What goes around comes around... ";




  echo $str ;

function leetSpeak($str)
{

$result = "";

for ($index=0 ; isset($str[$index]) ; $index++ )
{

    if ($str[$index] == 'a' || $str[$index] == 'A'){
        $result[$index] = '4';
    }
    elseif ($str[$index] == 'b' || $str[$index] == 'B'){
        $result[$index] = '8';
    }
    elseif ($str[$index] == 'e' || $str[$index] == 'E'){
        $result[$index] = '3';
    }
    elseif ($str[$index] == 'g' || $str[$index] == 'G'){
        $result[$index] = '6';
    }
    elseif ($str[$index] == 'l'  || $str[$index] == 'L'){
        $result[$index] = '1';
    }
    elseif ($str[$index] == 's' || $str[$index] == 'S'){
        $result[$index] = '5';
    }
    elseif ($str[$index] == 't' || $str[$index] == 'T'){
        $result[$index] = '7';
    }
    else{
        $result[$index] = $str[$index];
    }
}

return ($result); 

}

echo leetSpeak($str);


?>