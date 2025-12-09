<?php
$db = new PDO('mysql:host=localhost;dbname=Clarte_Ornee;charset=utf8mb4' , 'root', '');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

// Faire le script php qui dira "si je clique sur l'image tu affichera... (les détails de la lampe)"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Relier le css qui permettra de paramètrer l'affichage des informations -->
</head>
<body>
    <!-- Inclure via php les informations (image, description, prix etc...) -->
</body>
</html>