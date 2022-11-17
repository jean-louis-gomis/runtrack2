<?php
$dep = 0;

while ($dep <=100) {
    if ($dep <=20) {
        echo "<i><i/>";
    }
    if ($dep >=25 && $dep <=50) {
        echo "<u><u/>";
    }
    if ($dep === 42) {
        echo "La Plateforme_";
    }
    echo $dep++. '<br>';
}



?>