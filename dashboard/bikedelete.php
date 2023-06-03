<?php
include("../baglan.php");
rmdir(strval("../img/".$_GET["bisiklet"]));
$conn -> query("DELETE FROM bisiklet_detay WHERE bisiklet_id = ".$_GET["bisiklet"]);
$conn -> query("DELETE FROM bisikletler WHERE id = ".$_GET["bisiklet"]);
header("Location:items.php")
?>