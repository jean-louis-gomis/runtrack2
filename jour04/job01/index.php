<!DOCTYPE html>
<html lang="fr">

<head>
    <title>salut</title>
    <meta charset="utf-8" />
</head>

<body>
    <form action="" method="get">
        <label for="name">Nom: </label> 
        <input type="text" id="name" style="margin-bottom: 1%;" name="user_name" required><br>
        <label for="name">Prénom: </label> 
        <input type="text" id="name" style="margin-bottom: 1%;" name="user_name" required><br>
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>

<?php

$i= 0;

    foreach($_GET as $key){
    $i++;
    }
    echo $i;
    var_dump ($_GET);
?>