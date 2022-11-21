


<?php
$dep=0;

while ($dep <= 100) {
    if ($dep >= 0 && $dep <= 20) {
        echo '<i>'.$dep.'</i><br/>';
    }
    else if ($dep >= 25 && $dep <= 50) {
        if ($dep == 42)
            echo 'La Plateforme_'.'<br/>';
        else
            echo '<u>'.$dep.'</u><br/>';
    }
    else {
        echo $dep.'<br/>';
    }
    $dep++;
}
?>