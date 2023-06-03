<?php
include("../baglan.php");
$conn -> query("INSERT INTO bisikletler (bisiklet_marka,bisiklet_model,bisiklet_renk) VALUES ('','','')");
$bisiklet = $conn -> query("SELECT id FROM bisikletler ORDER BY id DESC LIMIT 1") -> fetch_column();
$conn -> query("INSERT INTO bisiklet_detay (bisiklet_id) VALUES (".$bisiklet.")");
mkdir(strval("../img/".$bisiklet));
header("Location:bikeedit.php?bisiklet=".$bisiklet);
?>