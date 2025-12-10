<?php

$db = new PDO('mysql:host=localhost;dbname=Clarte_Ornee;charset=utf8mb4' , 'root', '');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$sql = "SELECT * FROM Lamps";
$query = $db->query($sql);
$lamps = $query->fetchall();

$sql = "SELECT * FROM Customers";
$query = $db->query($sql);
$customers = $query->fetchall();


$sql = "SELECT * FROM Basket";
$query = $db->query($sql);
$basket = $query->fetchall();


$sql = "SELECT * FROM Orders";
$query = $db->query($sql);
$orders = $query->fetchall();

$sql = "SELECT * FROM Associate";
$query = $db->query($sql);
$associate = $query->fetchall();

?>