<?php include('models/lampes.php'); 
?>
<section id = 'hero'>
    <h1>Clarté Ornée</h1>

    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Possimus quo sunt architecto saepe adipisci nulla deserunt nihil placeat eius earum ipsa, sint tempora corporis reprehenderit, quia eaque voluptas repellat veniam?</p>
    <div class="hero-buttons">
        <a href="#" role="button"> Nos lampes </a>
        <a href="index.php?page=Panier" role="button"> Votre Panier </a>
</section>

<h2 class= 'lampe'> Nos lampes </h2>


<?php foreach ($typelamps as $type) { ?>

    <h3> <?= $type["TypeLamp"] ?> </h3>

    <?php foreach ($lamps as $lamp) { ?>
    <?php if ($lamp["TypeLamp"]== $type["TypeLamp"]){
        ?>
        <div class= 'grid'>
            <article>
                <header>
                    <img src='<?= $lamp["PathPicture"] ?>' alt='Image random'>
                </header>
                <a href="index.php?page=lamp-details"> Voir plus </a>
            </article>
        </div>
    <?php }}}?>

