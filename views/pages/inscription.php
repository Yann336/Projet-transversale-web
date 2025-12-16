<?php include('models/add.php') ?>
<section>
<h1>Inscription</h1>

<form method="post" class="registration">
    <label for="Name">Prénom :</label><br>
    <input type="text" id="Name" name="Name" required><br><br>

    <label for="Lastname">Nom:</label><br>
    <input type="text" id="Lastname" name="Lastname" required><br><br>

    <label for="Email">Email :</label><br>
    <input type="email" placeholder="@gmail.com" id="Email" name="Email" required><br><br>

    <label for="Street">Adresse :</label><br>
    <input type="text" id="Street" name="Street" required><br><br>

    <label for="City">Ville :</label><br>
    <input type="text" id="City" name="City" required><br><br>

    <label for="Country">Pays :</label><br>
    <input type="text" id="Country" name="Country" required><br><br>

    <label for="PostCode">Code postal :</label><br>
    <input type="text" id="PostCode" name="PostCode"
        inputmode="numeric" placeholder="12345" pattern="[0-9]{5}" maxlength="5" required><br><br>

    <label for="Numberphone">Numéro de téléphone :</label><br>
    <input type="tel"
        inputmode="numeric"
        id="Numberphone"
        name="NumberPhone"
        placeholder="0123456789"
        pattern="0[1-9]([0-9]{2}){4}"
        maxlength="10"
        required><br><br>

    <label>Mot de passe :</label><br>
    <input type="password" name="password" id="password" required><br><br>

    <label>Confirmer le mot de passe :</label><br>
    <input type="password" id="confirm_password" name="confirm_password" required><br><br>

    <input type="submit" value="Valider">
</form>
</section>
<?php if (!empty($error)) { ?>
    <p><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></p>
<?php } ?>
