<?php include('models/lampes.php'); 
?>
<section id="hero" class="hero" role="region" aria-label="Bannière"> 
  <div class="hero-inner">
    <h1>Bienvenue<br>à Clarté Ornée</h1>
    <p class="lead">Luminaires soigneusement sélectionnés pour sublimer votre intérieur.</p>

    <div class="hero-buttons">
        <a href="#lampes" role="button"> Nos lampes </a>
        <a href="index.php?page=Panier" role="button"> Votre Panier </a>
</section>

<h2 id="lampes" class= 'lampe'> Nos lampes </h2>


<?php foreach ($typelamps as $type) { ?>

    <h3> <?= $type["TypeLamp"] ?> </h3>
       <div class="grid">

    <?php foreach ($lamps as $lamp) { ?>
    <?php if ($lamp["TypeLamp"]== $type["TypeLamp"]){
        ?>
            <article>
                <header>
                    <img src='<?= $lamp["PathPicture"] ?>' alt='Image random'>
                </header>
                <a href="index.php?page=lamp-details&id=<?= $lamp['idLamp'] ?>">Voir plus</a>
            </article>
        <?php } ?>
    <?php } ?>
</div>
<?php } ?>

    

