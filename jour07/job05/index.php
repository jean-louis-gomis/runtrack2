
<!-- //////////////////////////////////////////////////////////////////////// -->

<?php

$str= " What goes around comes around... ";
$char= " ";



function occurence($str, $char)
{
    $comptage = 0;

    for($index=0 ; isset($str[$index]) ; $index++ )
    {
        if ($str[$index] == $char)
        {
            $comptage++;
        }
    }

    return ($comptage);
}

echo occurence($str, $char);

?>






<!-- \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\_ -->

