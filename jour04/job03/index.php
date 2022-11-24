<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <?php
    $i=0;
    ?>
    <form action="#" method="GET">
        NOM:   <input type="text" style="margin-bottom: 1%;" name="NOM" required><br>
        PRENOM: <input type="text" style="margin-bottom: 1%;" name="PRENOM" required><br>
        EMAIL: <input type="text" style="margin-bottom: 1%;" name="EMAIL" required><br>
        <input type="submit" style="margin-bottom: 3%;" value="Envoyer"></br>
    </form>
    <?php
    foreach ($_GET as $oui) {
        $i++;
    }

    ?>
    <table border= "1px">
        <tr>
            <th>Arguments</th>
            <th>Valeurs</th>
        </tr>


        <tr>    
            <td>NOM</td>
            <td><?php echo $_GET['NOM'];?></td>
        </tr>
        
        <tr>
            <td>PRENOM</td>
            <td><?php echo $_GET['PRENOM'];?></td>
        </tr>
        
        <tr>
            <td>EMAIL</td>
            <td><?php echo $_GET['EMAIL'];?></td>
        </tr>
    
    </table>


</html>
