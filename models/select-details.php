<?php
include('dbConnect.php');

$sqlSelect = "SELECT * FROM Lamps WHERE idLamp = " . $_GET['id'];
$query = $db->query($sqlSelect);
$lamps = $query->fetch();

?>