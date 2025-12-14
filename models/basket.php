<?php

include('dbConnect.php');

    $sql = "SELECT * FROM baskets
    JOIN Lamps ON lamps.idLamp = Baskets.idLamp
    JOIN customers ON customers.idCustomer = baskets.idCustomer
    WHERE lamps.idLamp = Baskets.idLamp AND Email = :email" ;
    $query = $db->prepare($sql);
    $query->execute([':email' => $_SESSION['pseudo']]);
    $baskets = $query->fetch();
    

    $sql = "SELECT idCustomer FROM customers
    Where Email = :email";
    $query = $db->prepare($sql);
    $query->execute([':email' => $_SESSION['pseudo']]);
    $idcustomer = $query->fetch();

    $sql = "INSERT INTO baskets (idLamp, idCustomer)
        Values (:idLamp , :customer )";
        $query = $db->prepare($sql);
        $query->execute([
            ':customer' => $idcustomer['idcustomer'],
            ':idLamp' => $_GET['id']
        ]);
?>