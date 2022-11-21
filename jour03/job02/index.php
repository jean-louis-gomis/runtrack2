<?php
    $chaine = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

    for ($i=0; isset($chaine[$i]); $i++) { 
        if ($i==0 || $i%2 ==0) {
            echo $chaine[$i];       

        }
} 


?>