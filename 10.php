<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

// Boucle foreach pour itérer sur chaque paire clé-valeur du tableau
foreach ($normandie as $key => $value) {
    // Affiche une phrase formatée avec la clé et la valeur actuelles
    echo "Le département " . $value . " a le numéro " . $key . "<br>";
}

  ?>  
</body>
</html>