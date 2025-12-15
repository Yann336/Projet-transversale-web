<?php
include('dbConnect.php');
$price = 0;
$nbarticle = 0;

if (empty($_SESSION['pseudo'])){
    header('Location: index.php?page=connection');
}
else{
    $sql = "SELECT * FROM baskets
    JOIN Lamps ON lamps.idLamp = Baskets.idLamp
    JOIN customers ON customers.idCustomer = baskets.idCustomer
    WHERE lamps.idLamp = Baskets.idLamp AND Email = :email" ;
    $query = $db->prepare($sql);
    $query->execute([':email' => $_SESSION['pseudo']]);
    $baskets = $query->fetchAll(PDO::FETCH_ASSOC);
}


if (isset($_POST['id']) && !empty($_POST['id'])) {

    $sql = "DELETE FROM baskets WHERE idBasket = :id";
    $stmt = $db->prepare($sql);
    $stmt->execute([
        ':id' => $_POST['id']
    ]);
    header('Location: index.php?page=Panier');
}

?>