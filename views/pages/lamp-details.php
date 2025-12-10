<?php

include('models/select-details.php');
$id= $_GET['id'];

?>

<h1> <?= $lamps["name"] ?></h1>

<h3> <?= $lamps["TypeLamp"] ?> </h3>

<img src='<?= $lamps["PathPicture"] ?>' alt='Image random'>

<p> 
    Puissance : <?= $lamps["Power"] ?> <br>
    Couleur : <?= $lamps["Color"] ?> <br>
    Matériaux : <?= $lamps["Material"] ?> <br>
    Dimensions : <?= $lamps["Dimensions"] ?> <br>
</p>

<p>
    <?= $lamps["Description"] ?>
</p>

<p> Price : <?= $lamps["Price"] ?> </p>

<form method="POST">
    <input type="hidden" name="idLamp" value="<?= $_GET['id'] ?>">
    <button type="submit">Ajouter au panier</button>
</form>

