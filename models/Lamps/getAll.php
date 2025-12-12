<?php
include('models/dbConnect.php');

$stmt = $db->prepare("SELECT * FROM Lamps");
$stmt->execute();
$lamps = $stmt->fetchall(PDO::FETCH_ASSOC);

$stmt = $db->prepare("SELECT * FROM Customers");
$stmt->execute();
$lamps = $stmt->fetchall(PDO::FETCH_ASSOC);

$stmt = $db->prepare("SELECT * FROM Baskets");
$stmt->execute();
$lamps = $stmt->fetchall(PDO::FETCH_ASSOC);

$stmt = $db->prepare("SELECT * FROM Orders");
$stmt->execute();
$lamps = $stmt->fetchall(PDO::FETCH_ASSOC);

$stmt = $db->prepare("SELECT * FROM Associates");
$stmt->execute();
$lamps = $stmt->fetchall(PDO::FETCH_ASSOC);

?>