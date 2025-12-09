<?php
$_SESSION['pseudo']='toto';

 if (empty($_POST) == TRUE){
                $feedback="";
            }
            else{
                if ($_POST["email"] == "admin@gmail.com" && $_POST["password"] == "admin"){
                    $_SESSION['authenticated']= true; 
                    header('Location: index.php?page=home');
                    exit;
                }
                else{
                    $feedback = "Identifiant ou mot de passe incorrect";
                }
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