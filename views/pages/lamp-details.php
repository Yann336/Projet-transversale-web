<?php

include('models/select-details.php');
$id= $_GET['id'];

?>
<section class="product">
    <div class="left">
        <h1> <?= $lamps["name"] ?></h1>

        <h3> <?= $lamps["TypeLamp"] ?> </h3>

        <img src='<?= $lamps["PathPicture"] ?>' alt='Image random'>
    </div>
    <div class="right">
        <p class='attributs'> 
            Puissance : <?= $lamps["Power"] ?> <br>
            Couleur : <?= $lamps["Color"] ?> <br>
            Matériaux : <?= $lamps["Material"] ?> <br>
            Dimensions : <?= $lamps["Dimensions"] ?> <br>
        </p>

        <p class="description">
            <?= $lamps["Description"] ?>
        </p>

        <p class="prix"> Prix : <?= $lamps["Price"] ?> </p>

        <form method="POST">
            <input type="hidden" name="idLamp" value="<?= $_GET['id'] ?>">
            <button class="bouton" type="submit">Ajouter au panier</button>
        </form>
    </div>
</section>