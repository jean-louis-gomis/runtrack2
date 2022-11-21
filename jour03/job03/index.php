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
        echo $i [0,1,2,3,4,5];
        // if ($i == $voyelles) {
        //     echo $str[$i];
            
        // }
    }


    ?>   




<?php

 $str = 'I\'m sorry Dave I\'m afraid I can\'t do that.' ;
 $lettre = array ('a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y');

for ($compteur = 0 ; $compteur < strlen($str) ; $compteur ++)
{

    if (in_array($str[$compteur], $lettre))

    {
        echo $str[$compteur]. ' ' ;
    }
} 


?>
    
    
    
    
    <!-- var_dump($chaine) -->
