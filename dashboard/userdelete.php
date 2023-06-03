<?php
include('../baglan.php');
$conn -> query("DELETE FROM uyeler WHERE id = ".$_GET['uye_id']);
?>