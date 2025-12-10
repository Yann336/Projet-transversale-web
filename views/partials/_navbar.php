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

<header>
    <div class = navbar>
        <nav>
            <ul>
                <li>
                    <strong>
                        <a href="index.php?page=home">Clarté Ornée</a></strong>
                </li>
            </ul>
            <ul>
                <li><a href="index.php?page=home">Accueil</a></li>
                <li><a href="index.php?page=lamp-details">Nos lampes</a></li>
                <li><a href="index.php?page=<?=$etatco?>"><?=$connect?></a></li>
                <li><a href="index.php?page=Panier">Panier</a></li>
            </ul>
        </nav>
    </div>
</header>