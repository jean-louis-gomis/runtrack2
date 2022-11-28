<!DOCTYPE html>
<html>
<body>


<style type="text/css">
.tftable {font-size:12px;color:#333333;width:25%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:center;}
.tftable tr {background-color:#d4e3e5;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffffff;}
</style>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jour09";
$moyenne = "SELECT AVG(capacite) FROM `salles`";

// Créer une connexion
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Vérifier la connexion
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT `nom`, `id_etage` FROM `salles` INNER JOIN etage ON id_etage=etage.id;";
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
/*Affichage des données résultats de chaque ligne dans une table html*/
	echo "<table class='tftable'> <tr><th>Nom</th><th>Étage</th></tr>";
  
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>". $row["nom" ]."</td><td>". $row["id_etage"] . "</td></tr>";
  }
echo "</table>";
} else {
  echo "0 results";
}

mysqli_close($conn);

?>
</body>
</html>
