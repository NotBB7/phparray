<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>8</title>
</head>
<body>
<?php
$normandie = array(
    "14" => "Calvados",
    "27" => "Eure",
    "50" => "Manche",
    "61" => "Orne",
    "76" => "Seine-Maritime"
);

// Boucle foreach pour itérer sur chaque élément du tableau
foreach ($normandie as $value) {
    // Affiche la valeur actuelle suivie d'un saut de ligne HTML
    echo $value . "<br>";
}
?>
    
</body>
</html>