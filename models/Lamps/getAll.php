<?php
include('models/dbConnect.php');

$sql = "SELECT * FROM Lamps";
$query = $db->query($sql);
$lamps = $query->fetchall();

$sql = "SELECT * FROM Customers";
$query = $db->query($sql);
$customers = $query->fetchall();


$sql = "SELECT * FROM Baskets";
$query = $db->query($sql);
$baskets = $query->fetchall();


$sql = "SELECT * FROM Orders";
$query = $db->query($sql);
$orders = $query->fetchall();

$sql = "SELECT * FROM Associates";
$query = $db->query($sql);
$associates = $query->fetchall();

?>