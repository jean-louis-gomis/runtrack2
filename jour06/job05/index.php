

<?php
function check_errors($value) {
    if ($value == TRUE)
        return 1;
    else
        return 0;
}
if(check_errors($_POST) == 0)
    echo '<link rel="stylesheet" href="style.css">';
else {
    if(isset($_POST['style_css']) && $_POST['style_css'] == 'style')
        echo '<link rel="stylesheet" href="style.css">';
    else if(isset($_POST['style_css']) && $_POST['style_css'] == 'style1')
        echo '<link rel="stylesheet" href="style1.css">';
    else if(isset($_POST['style_css']) && $_POST['style_css'] == 'style2')
        echo '<link rel="stylesheet" href="style2.css">';
    else if(isset($_POST['style_css']) && $_POST['style_css'] == 'style3')
        echo '<link rel="stylesheet" href="style3.css">';
    }
?>

<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <title>Job05</title>
</head>
<body>

<form action="index.php" method="post">Qui gagnera la Coupe du Monde 2022? </br>

<select name="style_css" id="fonction">
    <option value="style">-- Choisissez votre favoris --</option>
    <option value="style1">Allemagne</option>
    <option value="style2">Brésil</option>
    <option value="style3">France</option>
</select></br>
<input type="submit" value="Valider">
</form>


</body>
</html>
