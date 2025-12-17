<?php

include('dbConnect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pay'])) {

    $email = $_SESSION['pseudo'];

    $sql = "SELECT idCustomer FROM customers WHERE Email = :email LIMIT 1";
    $stmt = $db->prepare($sql);
    $stmt->execute([':email' => $email]);
    $customer = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($customer) {


        $sql = "DELETE FROM baskets WHERE idCustomer = :idCustomer";
        $stmt = $db->prepare($sql);
        $stmt->execute([
            ':idCustomer' => $customer['idCustomer']
        ]);
    }

    header('Location: index.php?page=home');
    exit;
}

?>
<section>
        <div class="container-achat" action="index.php?page=achat">
            <form method = 'post' >

                <div class="delivery_method">
                    <h4>Méthode d'expedition</h4>

                    <label for="Street">Adresse :</label>
                    <input type="text" id="Street" name="Street" required>

                    <label for="City">Ville :</label>
                    <input type="text" id="City" name="City" required>

                    <label for="Country">Pays :</label>
                    <input type="text" id="Country" name="Country" required>

                    <label for="PostCode">Code postal :</label>
                    <input type="text" id="PostCode" name="PostCode"
                        inputmode="numeric" placeholder="12345" pattern="[0-9]{5}" maxlength="5" required>

                    <input type="radio" id="dpd" name="dpd" value="dpd">
                    <label class="dpd" for="dpd">€9,95 Livré par DPD sous 2 à 4 jours ouvrables</label>
                </div>

                <div class="payment_column">

                    <div class="payment_method">
                        <h4>Méthode de payement</h4>

                        <label for="NumberCard">Numéro de carte :</label>
                        <input type="text" id="NumberCard" name="NumberCard"
                            inputmode="numeric" placeholder="1234567890123456" pattern="[0-9]{16}" maxlength="16" required>

                        <label for="ExperyDate">Date d'expiration :</label>
                        <input type="text" id="ExperyDate" name="ExperyDate"
                            inputmode="numeric" placeholder="MM/AA" pattern="(0[1-9]|1[0-2])/[0-9]{2}" required>

                        <label for="SecurityCode">Code de sécurité :</label>
                        <input type="text" id="SecurityCode" name="SecurityCode"
                            inputmode="numeric" placeholder="123" pattern="[0-9]{3}" maxlength="3" required>

                        <label for="NameCard">Nom du titulaire :</label>
                        <input type="text" placeholder="Joe Dohn" id="NameCard" name="NameCard" required>
                    </div>

                    <div class="payment">
                        <h4><strong>Passer au règlement</strong></h4>
                        <a href="index.php?page=basket">Voir le panier</a>


                        <input type="hidden" name="pay" value="1">
                        <input type="submit" class="submit_button" value="Payer">
                    </div>

                </div>

            </form>
        </div>

</section>

    
        
    