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

    <form method=post> 

        <label for="description">veuillez décrire votre probleme :</label><br>
        <textarea name="message" id = "message" rows="10" cols="30" required>
        </textarea><br><br>


        <label for="numorder">Numéro de commande</label><br>
        <input type="number" id="numorder" name="numorder"><br><br>


        <input type="submit" name="send" value="Envoyez">
    </form>
