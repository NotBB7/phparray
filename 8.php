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
$months = array(
    "janvier",
    "février",
    "mars",
    "avril",
    "mai",
    "juin",
    "juillet",
    "août",
    "septembre",
    "octobre",
    "novembre",
    "décembre"
);

// Parcourir le tableau et afficher chaque valeur
foreach ($months as $month) {
        // Affiche la valeur actuelle suivie d'un saut de ligne HTML
    echo $month . "\n";
}
?>

    
</body>
</html>