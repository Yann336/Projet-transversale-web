<?php include('models/add.php') ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../../assets/css/inscription.css">

    <script>
        function verifierMotsDePasse() {
            const mdp1 = document.getElementById("password").value;
            const mdp2 = document.getElementById("confirm_password").value;

            if (mdp1 !== mdp2) {
                alert("Les mots de passe ne correspondent pas !");
                return false;
            }
            return true;
        }
    </script>
</head>

<body>

    <form action="#" method="post" class="registration" onsubmit="return verifierMotsDePasse()">
        <!-- mettre la page d'acceuil dans action-->

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
        <input type="password" id="password" required><br><br>

        <label>Confirmer le mot de passe :</label><br>
        <input type="password" id="confirm_password" required><br><br>

        <input class="submit_button" type="submit" value="Valider">
    </form>

</body>

</html>
<?php if (!empty($error)) { ?>
    <p><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></p>
<?php } ?>