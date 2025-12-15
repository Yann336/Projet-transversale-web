<?php
include('models/basket.php');
?>

<section id="Panier">
        <h1>Panier</h1>
        <p>Vendu et expédié par Clarté Ornée</p>


<?php if(!empty($baskets)){

    foreach ($baskets as $basket){
    $price = $price + $basket['Price'];
    $nbarticle = $nbarticle + 1;
    }

    foreach ($baskets as $basket) { ?>
            <div class= 'grid'>
                <article>
                    <header>
                        <div class="article">
                        <img src='<?= $basket["PathPicture"] ?>' alt='Image'>
                        </div>
                    </header>
                    <a href="index.php?page=lamp-details&id=<?= $basket['idLamp'] ?>">Voir plus</a>
                </article>
                <form method="post">
                    <input type="hidden" name="id" value="<?= $basket['idBasket'] ?>">
                    <input
                        type="submit"
                        class="outline secondary"
                        value="Supprimer"/>
                </form>
            </div>


        <div>
            <button class="btn-delete" aria-label="Supprimer">
                
                <img src="assets/images/poubelle.png" alt="Logo corbeille" width="50">
            </button>
        </div>

        <div>
            <form method="post">
                <label for="quantite">Quantité</label>
                <select id="quantite" name="quantite">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
            </form>
        </div>
<?php }}?>


        <div class="total-container">
            <span class="label">Total à payer <?= $price?> €</span>
        </div>

        <div>
            <a href="index.php?page=achat">
                <button type="button" class="btn-livraison">CONTINUER VERS LA LIVRAISON</button>
            </a>
        </div>

        <div id="code-promo">
            <form>
                <label>
                    <input type="text" id="promo" name="promo" placeholder="Code promotion">
                    <button type="submit">Valider</button>
                </label>
            </form>
        </div>
    </section>


    <section id="Récapitulatif">
        <h1>Récapitulatif</h1>

        <div class="total-commande">
            <span> Votre commande contient <?= $nbarticle?> articles </span>
        </div>

        <div class="Moyen-paiement">
            <span>Moyen de paiements</span>
        </div>

        <div class="paiements">
            <img src="assets/images/logo-payment-cb.svg" alt="Logo CB" width="30">
            <img src="assets/images/logo-payment-visa.svg" alt="Logo Visa" width="30">
            <img src="assets/images/logo-payment-cbMasterGl.svg" alt="Logo CB Master" width="30">
            <img src="assets/images/logo-payment-cbThousandOneList.svg" alt="Logo CB ThousandOne" width="30">
            <img src="assets/images/logo-payment-mastercard.svg" alt="Logo mastercard" width="30">
            <img src="assets/images/logo-payment-applePay.svg" alt="Logo Apple Pay" width="30">
            <img src="assets/images/logo-payment-amex.svg" alt="Logo Amex" width="30">
            <img src="assets/images/logo-payment-paypal.svg" alt="Logo Paypal" width="60">
            <img src="assets/images/logo-payment-floa3x4x.svg" alt="Logo Floa" width="60">
            <img src="assets/images/logo-payment-giftcard.svg" alt="Carte cadeau" width="60">
            <img src="assets/images/logo-payment-loyaltyVouchers.svg" alt="Bons d'achat" width="60">
        </div>
    </section>

