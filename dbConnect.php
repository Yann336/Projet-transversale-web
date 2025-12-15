<?php
$dbConfig = [
    'db_sgbd' => 'mysql',
    'db_host' => 'localhost',
    'db_name' => 'Clarte_Ornee',
    'db_username' => 'root',
    'db_password' => '',
];

try {
    $db = new PDO(
        $dbConfig['db_sgbd'] . ":host=" . $dbConfig['db_host'] . ";dbname=" . $dbConfig['db_name'] . ";charset=utf8",
        $dbConfig['db_username'],
        $dbConfig['db_password']
    );

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die("Erreur de connexion à la base : " . $e->getMessage());
}
?>
