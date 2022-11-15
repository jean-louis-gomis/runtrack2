<?php
$dep = 0;
$fin = 1337;
$bold = 42;

while ($dep < $fin) {
    if ($dep === 42) {
        echo "<b>$bold</b>";
    }
    echo $dep. '<br>';
    $dep = $dep + 1;
}



?>