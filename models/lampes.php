<?php

$db = new PDO('mysql:host=localhost;dbname=Clarte_Ornee;charset=utf8mb4' , 'root', '');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$sql = "SELECT * FROM LampTypes";
$query = $db->query($sql);
$lampTypes = $query->fetchall();

$sql = "SELECT * FROM LivingRoomLamps";
$query = $db->query($sql);
$livingRoomLamps = $query->fetchall();


$sql = "SELECT * FROM WallLamps";
$query = $db->query($sql);
$wallLamps = $query->fetchall();


$sql = "SELECT * FROM OutdoorLamps";
$query = $db->query($sql);
$outdoorLamps = $query->fetchall();

$sql = "SELECT * FROM LampPictures";
$query = $db->query($sql);
$lampPictures = $query->fetchall();

$sql = "SELECT * FROM Customers";
$query = $db->query($sql);
$customers = $query->fetchall();

$sql = "SELECT * FROM Orders";
$query = $db->query($sql);
$orders = $query->fetchall();

?>