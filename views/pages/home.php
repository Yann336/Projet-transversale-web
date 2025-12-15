<?php include('models/lampes.php'); ?>
<section id="hero" class="hero" role="region" aria-label="Bannière"> 
  <div class="hero-inner">
    <h1>Bienvenue<br>à Clarté Ornée</h1>
    <p class="lead">Luminaires soigneusement sélectionnés pour sublimer votre intérieur.</p>

    <div class="hero-buttons">
        <a href="#lampes" role="button"> Nos lampes </a>
        <a href="index.php?page=Panier" role="button"> Votre Panier </a>
    </div>
</section>

<h2 id="lampes" class="lampe"> Nos lampes </h2>

<?php foreach ($typelamps as $type) { ?>

    <h3><?= htmlspecialchars($type["TypeLamp"], ENT_QUOTES, 'UTF-8') ?></h3>
    <div class="grid">

    <?php foreach ($lamps as $lamp) { ?>
        <?php if ($lamp["TypeLamp"] == $type["TypeLamp"]) { ?>
            <article>
                <header>
                    <img 
                        src="<?= htmlspecialchars($lamp["PathPicture"], ENT_QUOTES, 'UTF-8') ?>" 
                        alt="Image lampe">
                </header>
                <a href="index.php?page=lamp-details&id=<?= htmlspecialchars($lamp['idLamp'], ENT_QUOTES, 'UTF-8') ?>">
                    Voir plus
                </a>
            </article>
        <?php } ?>
    <?php } ?>

    </div>
<?php } ?>
