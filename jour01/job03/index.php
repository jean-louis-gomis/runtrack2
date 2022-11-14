<?php
$vrai = true;
$faux = false;
$entier = 7;
$decimal = 7.4;
$caracteres = "texte";
$type = "Sans Serif";
$nom = "Helvetica";
$valeur = "32€99";

echo "La variable \$vrai contient une valeur de type ";
print gettype ($vrai);

echo " <br> La variable \$faux contient une valeur de type ";
print gettype ($faux);

echo " <br> La variable \$entier contient une valeur de type ";
print gettype ($entier);

echo " <br> La variable \$decimal contient une valeur de type ";
print gettype ($decimal);

echo " <br> La variable \$caracteres contient une valeur de type ";
print gettype ($caracteres);

?>


<!DOCTYPE html>
<html lang="fr">
<body>
<style type="text/css">
.tftable {font-size:12px;color:#333333;width:30%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;text-align : center; border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr {background-color:#ffffff;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffff99;}
</style>

<table class="tftable" border="1">
<tr><th>Type</th><th>Nom</th><th>Valeur</th></tr>
<tr><td> <?php echo $type ?></td><td> <?php echo $nom ?></td><td> <?php echo $valeur ?></td></tr>
</table>


</body>


</html>