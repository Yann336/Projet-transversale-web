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
        <?php if ($feedback != null) {   ?>
                <p><?= $feedback ?> </p>
        <?php } ?>
            <input
			type="submit"
			value="Se Connecter" />       
    </form>
</section>