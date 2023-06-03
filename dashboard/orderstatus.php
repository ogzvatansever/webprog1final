<?php
include('../baglan.php');
$eski = $conn -> query("SELECT status FROM siparis WHERE id = ".$_GET['siparis_id']) -> fetch_column();
if ($eski == 1) {
    $conn -> query("UPDATE siparis SET status = 0 WHERE id = ".$_GET['siparis_id']);
}
if ($eski == 0) {
    $conn -> query("UPDATE siparis SET status = 1 WHERE id = ".$_GET['siparis_id']);
}

?>