<?php
include('baglan.php');

$sql = "INSERT INTO kullaniciyorumlari (bisiklet_id, isim, eposta, puan, yorum_baslik, yorum)
VALUES (".$_GET['bisiklet_id'].", '".$_GET['isim']."', '".$_GET['eposta']."',".$_GET['puan'].",'".$_GET['baslik']."','".$_GET['yorum']."')";

$conn->query($sql);
header("Location: bisiklet.php?id=".$_GET['bisiklet_id']."");
die();

?>