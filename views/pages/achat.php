<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form>
        <h3>méthode d'expedition</h3>

        <label for="Street">Adresse :</label><br>
        <input type="text" id="Street" name="Street" required><br><br>

        <label for="City">Ville :</label><br>
        <input type="text" id="City" name="City" required><br><br>

        <label for="Country">Pays :</label><br>
        <input type="text" id="Country" name="Country" required><br><br>

        <label for="PostCode">Code postal :</label><br>
        <input type="text" id="PostCode" name="PostCode"
            inputmode="numeric" placeholder="12345" pattern="[0-9]{5}" maxlength="5" required><br><br>


    </form>


    <!-- <form>

        <h4><strong>mode de paiement</strong></h4>

        <input type="radio" id="Carte_Bancaire" name="moyen-paiement" value="Carte_Bancaire">
        <img src="" alt="image">
        <label for="Carte_Bancaire">Carte Bancaire</label><br><br>

        <input type="radio" id="VISA" name="moyen-paiement" value="VISA">
        <img src="" alt="image">
        <label for="VISA">VISA</label><br><br>

        <input type="radio" id="Mastercard(galerie_lafayette)" name="moyen-paiement"
            value="Mastercard(galerie_lafayette)">
        <img src="" alt="image">
        <label for="Mastercard(galerie_lafayette)">Mastercard(galerie lafayette)</label><br><br>

        <input type="radio" id="Mastercard(Mille_et_une_listes)" name="moyen-paiement"
            value="Mastercard(Mille_et_une_listes)">
        <img src="" alt="image">
        <label for="Mastercard(Mille_et_une_listes)">Mastercard(Mille et une listes)</label><br><br>

        <input type="radio" id="Mastercard" name="moyen-paiement" value="Mastercard">
        <img src="" alt="image">
        <label for="Mastercard">Mastercard</label><br><br>

        <input type="radio" id="apple_pay" name="moyen-paiement" value="apple_pay">
        <img src="" alt="image">
        <label for="apple_pay">Apple Pay</label><br><br>

        <input type="radio" id="American_Express" name="moyen-paiement" value="American_Express">
        <img src="" alt="image">
        <label for="American_Express">AMEX</label><br><br>

        <input type="radio" id="paypal" name="moyen-paiement" value="paypal">
        <img src="" alt="image">
        <label for="paypal">Paypal</label><br><br>

        <input type="radio" id="floa" name="moyen-paiement" value="floa">
        <img src="" alt="image">
        <label for="floa">Floa</label><br><br>

        <input type="radio" id="carte_cadeau" name="moyen-paiement" value="carte_cadeau">
        <img src="" alt="image">
        <label for="carte_cadeau">Carte cadeau</label><br><br>

        <input type="radio" id="bons_achat" name="moyen-paiement" value="bons_achat">
        <img src="" alt="image">
        <label for="bons_achat">Bons d'achat</label><br><br>

    </form> -->
    <h3>information cb</h3>
    <form action="">
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

        <input type="radio" id="dpd" name="dpd" value="dpd" required>
        <label for="dpd">€9,95 Livré par DPD sous 2 à 4 jours ouvrables</label>


    </form>





    <form>
        <h4><strong>passez au reglement</strong></h4>
        <a href="index.php?page=Panier">voici le contenue de votre panier</a> <br> <br>
        <button>encaissement</button>
    </form>
</body>

</html>