<?php

    $str = "I'm sorry Dave I'm afraid I can't do that.";
    // var_dump($str)
    $num_voyelles = 0;
    $voyelles = ['a','e','y','u','i','o'];

    // $voyelles [0] = 'a';
    // $voyelles [1] = 'e';
    // $voyelles [2] = 'y';
    // $voyelles [3] = 'u';
    // $voyelles [4] = 'i';
    // $voyelles [5] = 'o';

    for ($i=0; isset($str[$i]); $i++) { 
        if ($i = $voyelles) {
            echo $num_voyelles++;
        }
    }


    ?>   
    
    
    
    
    <!-- var_dump($chaine) -->
