<?php 
$connect = 'Se connecter';
$etatco = 'connection';
if (!empty($_SESSION['authenticated'])){
    if ($_SESSION['authenticated']){
        $connect= 'Se déconnecter';
        $etatco = 'logout';
}
}
?>


<header class="page-navbar">
    <div class = "navbar">
        <nav>
            <a href="index.php?page=home"><img class="img_logo" src="assets/images/logo_site.png" alt="Logo site"></a>
                <strong>
                <a href="index.php?page=home">Clarté Ornée</a></strong>
                <a class="lien" href="index.php?page=home">Accueil</a>
                <a class="lien" href="index.php?page=home#lampes">Nos lampes</a>
                <a class="lien" href="index.php?page=<?=$etatco?>"><?=$connect?></a>
                <a href="index.php?page=Panier" class="btn-panier" aria-label="Panier"> <img src="assets/images/panier1.png" alt="Logo panier">
            <span class="panier-text">Panier</span></a>
        </nav>
    </div>
 </header>