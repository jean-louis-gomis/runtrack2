<?php
// $dep = 0;

for ($dep=0; $dep <101 ; $dep++) { 
    if ($dep %3 == 0 && $dep %5 == 0) {
        echo "FizzBuzz <br/>" ;
    }
    else if ($dep %3 == 0) {
        echo "Fizz <br/>";
    }
    else if ($dep %5 == 0) {
        echo "Buzz <br/>";
    }
    else {
        echo $dep. '<br>';
    }


}



?>