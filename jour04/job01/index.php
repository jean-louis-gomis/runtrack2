<?php

<form action="index.php" method="get">
 <p>Votre nom : <input type="text" name="nom" /></p>
 <p>Votre âge : <input type="text" name="age" /></p>
 <p><input type="submit" value="ENVOYER"></p>
</form>
 
echo var_dump($_GET);



?>