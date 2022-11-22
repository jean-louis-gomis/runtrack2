<?php

/* $str = "Les choses que l'on possede finissent par nous posseder";
$i = 0;

while (isset($str[$i])) {
    $i++;
    
}

while ($i >= 0) {
    echo $str[$i];
    $i -- ;
    
} */


$str = "Les choses que l'on possede finissent par nous posseder"; 

for($i = 0; isset($str[$i]);$i ++);

for($i = $i -1; isset($str[$i])&& $i >= 0; $i-- ){
    echo $str[$i];    
    }  

?>