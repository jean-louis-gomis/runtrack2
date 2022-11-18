<?php
    $chaine = array("Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.");
    // var_dump($chaine)
    while ($chaine <78) { 
        if ($chaine %2 == 0) {
            $chaine++;
            continue; 
    } 
        else {
            echo $chaine;
        }
}
    ?>