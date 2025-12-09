
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clarté Ornée</title>
</head>

<body>
   <?php include('views/partials/_navbar.php') ?>
    <main>
       <?php include('views/pages/' . $_GET['page'] . '.php') ?>
    </main>
    
</body>

</html>