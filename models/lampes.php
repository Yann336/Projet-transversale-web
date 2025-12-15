<?php

include('dbConnect.php');

$stmt = $db->prepare("SELECT * FROM Lamps");
$stmt->execute();
$lamps = $stmt->fetchall(PDO::FETCH_ASSOC);

$stmt = $db->prepare("SELECT * FROM Customers");
$stmt->execute();
$customers = $stmt->fetchall(PDO::FETCH_ASSOC);

$stmt = $db->prepare("SELECT * FROM Baskets");
$stmt->execute();
$baskets = $stmt->fetchall(PDO::FETCH_ASSOC);


$sql = "SELECT DISTINCT TypeLamp FROM Lamps";
$stmt = $db->prepare($sql);
$stmt->execute();
$typelamps = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>