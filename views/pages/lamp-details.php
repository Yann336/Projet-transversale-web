<?php

include('models/select-details.php');
$id= $_GET['id'];


if (isset($_POST['addToCart'])) {

    if ($_SESSION['pseudo']== 'toto'){
        header('Location: index.php?page=connection');
        exit;
    }

    // Sécurité : validation de l'id
    $idLamp = filter_input(INPUT_POST, 'idLamp', FILTER_VALIDATE_INT);
    if (!$idLamp) {
        die('ID lampe invalide');
    }

    $sql = "SELECT idCustomer FROM customers
    Where Email = :email";
    $query = $db->prepare($sql);
    $query->execute([':email' => $_SESSION['pseudo']]);
    $idcustomer = $query->fetch();

    $sql = "INSERT INTO baskets (idLamp, idCustomer)
        Values (:idLamp , :customer )";
        $query = $db->prepare($sql);
        $query->execute([
            ':customer' => $idcustomer['idCustomer'],
            ':idLamp' => $idLamp
        ]);
    }
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


<p> 
    Puissance : <?= $lamps["Power"] ?> <br>
    Couleur : <?= $lamps["Color"] ?> <br>
    Matériaux : <?= $lamps["Material"] ?> <br>
    Dimensions : <?= $lamps["Dimensions"] ?> <br>
</p>

<p class="price"> Prix : <?= $lamps["Price"] ?> </p>

<p> Price : <?= $lamps["Price"] ?> </p>

<form method="POST">
    <input type="hidden" name="idLamp" value="<?= $_GET['id'] ?>">
    <button type="submit" name="addToCart">Ajouter au panier</button>
</form>

        <form method="POST">
            <input type="hidden" name="idLamp" value="<?= $_GET['id'] ?>">
            <button class="button" type="submit">Ajouter au panier</button>
        </form>
    </div>
</section>