<?php
include('models/select-details.php');

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
if (!$id) {
    die('ID invalide');
}

if (isset($_POST['addToCart'])) {

    if ($_SESSION['pseudo'] == 'toto') {
        header('Location: index.php?page=login');
        exit;
    }

    $idLamp = filter_input(INPUT_POST, 'idLamp', FILTER_VALIDATE_INT);
    if (!$idLamp) {
        die('ID lampe invalide');
    }

    $sql = "SELECT idCustomer FROM customers WHERE Email = :email";
    $query = $db->prepare($sql);
    $query->execute([':email' => $_SESSION['pseudo']]);
    $idcustomer = $query->fetch();

    $sql = "INSERT INTO baskets (idLamp, idCustomer)
            VALUES (:idLamp, :customer)";
    $query = $db->prepare($sql);
    $query->execute([
        ':customer' => $idcustomer['idCustomer'],
        ':idLamp' => $idLamp
    ]);
}
?>

<section class="product">
    <div class="left">
        <h1><?= htmlspecialchars($lamps["name"], ENT_QUOTES, 'UTF-8') ?></h1>

        <h3><?= htmlspecialchars($lamps["TypeLamp"], ENT_QUOTES, 'UTF-8') ?></h3>

        <img 
            src="<?= htmlspecialchars($lamps["PathPicture"], ENT_QUOTES, 'UTF-8') ?>" 
            alt="Image lampe">
    </div>

    <div class="right">
        <p class="attributs">
            Puissance : <?= htmlspecialchars($lamps["Power"], ENT_QUOTES, 'UTF-8') ?><br>
            Couleur : <?= htmlspecialchars($lamps["Color"], ENT_QUOTES, 'UTF-8') ?><br>
            Matériaux : <?= htmlspecialchars($lamps["Material"], ENT_QUOTES, 'UTF-8') ?><br>
            Dimensions : <?= htmlspecialchars($lamps["Dimensions"], ENT_QUOTES, 'UTF-8') ?><br>
        </p>

        <p class="description">
            <?= htmlspecialchars($lamps["Description"], ENT_QUOTES, 'UTF-8') ?>
        </p>

        <p class="price">
            Prix : <?= htmlspecialchars($lamps["Price"], ENT_QUOTES, 'UTF-8') ?>
        </p>

        <form method="POST">
            <input type="hidden" name="idLamp" value="<?= htmlspecialchars($id, ENT_QUOTES, 'UTF-8') ?>">
            <button type="submit" class="button" name="addToCart">Ajouter au panier</button>
        </form>
    </div>
</section>
