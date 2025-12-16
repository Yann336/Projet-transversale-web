<?php
include('dbConnect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send'])) {


    $email = $_SESSION['pseudo'];


    $sql = "SELECT idCustomer FROM customers WHERE Email = :email LIMIT 1";
    $stmt = $db->prepare($sql);
    $stmt->execute([':email' => $email]);
    $customer = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($customer) {

        $sql = "INSERT INTO CustomerService (idCustomer, Request, OrderNumber)
                VALUES (:idCustomer, :request, :orderNumber)";

        $stmt = $db->prepare($sql);
        $stmt->execute([
            ':idCustomer'  => $customer['idCustomer'],
            ':request'     => $_POST['message'],
            ':orderNumber' => !empty($_POST['numorder']) ? $_POST['numorder'] : null
        ]);

        header('Location: index.php?page=home');
        exit;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAV</title>
    <link rel="stylesheet" href="../../assets/css/SAV.css">
</head>

<body>
    <div class="customer_srvc">
        <form class="customer_service" action="#">

            <label for="description"><strong>
                    <h2> Décrire votre probleme :</h2>
                </strong></label><br>
            <textarea class="problem" name="message" rows="10" cols="105">
        </textarea><br><br>

            <label for="numorder"><strong>
                    <h4>Numéro commande:</h4>
                </strong></label>
            <input class="numorder" type="text" placeholder="N° commande" id="numorder" name="numorder" required><br><br>

            <input class="submit_button" type="submit" value="envoyer">
        </form>
    </div>
</body>

</html>