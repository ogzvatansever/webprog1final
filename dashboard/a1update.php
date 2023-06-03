<?php
include("../baglan.php");
$conn -> query("UPDATE anasayfafeature SET anabaslik = '".$_GET['anabaslik']."', anayazi = '".$_GET['anayazi']."', butonyazi = '".$_GET['butonyazi']."', butonlink = '".$_GET['butonlink']."', simge1 = '".$_GET['simge1']."', baslik1 = '".$_GET['baslik1']."', yazi1 = '".$_GET['yazi1']."', simge2 = '".$_GET['simge2']."', baslik2 = '".$_GET['baslik2']."', yazi2 = '".$_GET['yazi2']."', simge3 = '".$_GET['simge3']."', baslik3 = '".$_GET['baslik3']."', yazi3 = '".$_GET['yazi3']."', simge4 = '".$_GET['simge4']."', baslik4 = '".$_GET['baslik4']."', yazi4 = '".$_GET['yazi4']."'");
Header("Location:aedit.php");
?>