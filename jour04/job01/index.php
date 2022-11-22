<?php
    foreach($_GET as $key => $value) {
        echo $key." => ".$value.'<br/>';
    }

    print_r($_GET);



    ?>

<form action="./index.php" method="get">
    <label for="fname"> Nom:</label>
    <input type="text" id="fname" name="fname"><br><br>
    <label for="lname"> Prénom:</label>
    <input type="text" id="lname" name="lname"><br><br>
    <input type="submit" value="Envoyer">
</form>

