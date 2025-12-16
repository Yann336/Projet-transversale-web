<?php
include('dbConnect.php');

$sqlSelect = "SELECT * FROM Lamps WHERE idLamp = :id";
$stmt = $db->prepare($sqlSelect);
$stmt->bindValue(':id', $_GET['id'], PDO::PARAM_INT);
$stmt->execute();
$lamps = $stmt->fetch(PDO::FETCH_ASSOC);

?>