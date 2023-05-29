<?php
include("../baglan.php");

//$mail = $_POST["mail"];
//$password = $_POST["password"];
//$adress1 = $_POST["adress"];
//$adress2 = $_POST["adress2"];
//$country = $_POST["country"];
//$city = $_POST["city"];
//$zip = $_POST["zip"];


$conn -> query("INSERT INTO uyeler (mail,password,adress1,adress2,country,city,zip) VALUES ('".$_POST["mail"]."','".password_hash($_POST["password"],PASSWORD_BCRYPT)."','".$_POST["adress"]."','".$_POST["adress2"]."','".$_POST["country"]."','".$_POST["city"]."','".$_POST["zip"]."')");

?>