<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/achat.css">
</head>

<body>
    <div class="container">
        <form action="#">
            <div class="delivery_method">
                <h4>méthode d'expedition</h4>

                <label for="Street">Adresse :</label><br>
                <input type="text" id="Street" name="Street" required><br><br>

                <label for="City">Ville :</label><br>
                <input type="text" id="City" name="City" required><br><br>

                <label for="Country">Pays :</label><br>
                <input type="text" id="Country" name="Country" required><br><br>

                <label for="PostCode">Code postal :</label><br>
                <input type="text" id="PostCode" name="PostCode"
                    inputmode="numeric" placeholder="12345" pattern="[0-9]{5}" maxlength="5" required><br><br>

                <input type="radio" id="dpd" name="dpd" value="dpd">
                <label for="dpd">€9,95 Livré par DPD sous 2 à 4 jours ouvrables</label>
            </div>

            <div class="payment_column">
                <div class="payment_method">
                    <h4>méthode de payement</h4>
                    <label for="NumberCard">Numéro de carte :</label><br>
                    <input type="text" id="NumberCard" name="NumberCard"
                        inputmode="numeric" placeholder="1234567890123456" pattern="[0-9]{16}" maxlength="16" required><br><br>

                    <label for="ExperyDate">Date d'expiration :</label><br>
                    <input type="text" id="ExperyDate" name="ExperyDate"
                        inputmode="numeric" placeholder="MM/AA" pattern="(0[1-9]|1[0-2])\/[0-9]{2}" required><br><br>

                    <label for="SecurityCode">Code de sécurité :</label><br>
                    <input type="text" id="SecurityCode" name="SecurityCode"
                        inputmode="numeric" placeholder="123" pattern="[0-9]{3}" maxlength="3" required><br><br>

                    <label for="NameCard">Nom du titulaire :</label><br>
                    <input type="text" placeholder="Joe Dohn" id="NameCard" name="NameCard" required><br><br>
                </div>

                <div class="payment">
                    <h4><strong>passez au reglement</strong></h4>
                    <a href="">voici le contenue de votre panier</a> <br> <br>
                    <button>encaissement</button>
                </div>
            </div>
        </form>
    </div>
</body>


</html>