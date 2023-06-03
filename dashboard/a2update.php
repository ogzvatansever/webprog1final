<?php
include("../baglan.php");
$conn -> query("UPDATE hakkimizda SET baslik1 = '".$_GET['baslik1']."', yazi1 = '".$_GET['yazi1']."', resim1 = '".$_GET['resim1']."', baslik2 = '".$_GET['baslik2']."', yazi2 = '".$_GET['yazi2']."', resim2 = '".$_GET['resim2']."', baslik3 = '".$_GET['baslik3']."', yazi3 = '".$_GET['yazi3']."', resim3 = '".$_GET['resim3']."'");
Header("Location:aedit.php");
?>