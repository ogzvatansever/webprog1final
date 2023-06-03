<?php
include("../baglan.php");
$conn -> query("UPDATE bisikletler SET bisiklet_marka = '".$_GET['bisiklet_marka']."', bisiklet_marka_2 = '".$_GET['bisiklet_marka2']."', bisiklet_model = '".$_GET['bisiklet_model']."', bisiklet_model_2 = '".$_GET['bisiklet_model2']."', bisiklet_fiyat = '".$_GET['bisiklet_fiyat']."', bisiklet_renk = '".$_GET['bisiklet_renk']."', bisiklet_tur = '".$_GET['bisiklet_tur']."', bisiklet_tarz = '".$_GET['bisiklet_tarz']."', bisiklet_aciklama = '".$_GET['bisiklet_aciklama']."', bisiklet_diger = '".$_GET['bisiklet_diger']."' WHERE id = ".$_GET['bisiklet']);
Header("Location:items.php");
?>