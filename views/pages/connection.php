<?php
$_SESSION['pseudo'] = 'toto';

include('models/lampes.php');
 
$feedback = "";

if (!empty($_POST)) {

    $found = false;

    foreach ($customers as $user) {

        if ($_POST["email"] == $user["Email"] &&
            password_verify($_POST["password"], $user["password"])) { 
            $_SESSION['authenticated'] = true;
            $_SESSION['pseudo'] = $user["Email"];
            header('Location: index.php?page=home');
            exit;
        }
    }
    $feedback = "Identifiant ou mot de passe incorrect";
}

?>

<section id="form">
    <h1>Connection</h1>
    <form method = post>
        <fieldset class=grid>
            <label>
                Email
                <input
                    type="email"
                    name="email"
                    placeholder="Email"
                    autocomplete="email"/>
            </label>
            <label>
                Mot de passe
            <input
                type="password"
                name="password"
                placeholder="Password"
                aria-label="Password"
                autocomplete="current-password"/>
            </label>
        </fieldset>
        <?php if (!empty($feedback)) { ?>
            <p><?= htmlspecialchars($feedback, ENT_QUOTES, 'UTF-8') ?></p>
        <?php } ?>

            <input
			type="submit"
			value="Se Connecter" />    
        <a class="inscription" href="index.php?page=inscription">Inscription</a>      
    </form>
</section>