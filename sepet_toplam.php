<?php
include("baglan.php");

$sepetfiyatarray = ($conn -> query("SELECT bisiklet_fiyat FROM sepetler INNER JOIN bisikletler ON bisikletler.id = sepetler.bisiklet_id where sepet_id = 1") -> fetch_all());
$aratoplam = 0;
foreach ($sepetfiyatarray as $value) {
    $aratoplam += $value[0];
}

echo number_format($aratoplam)."$";
?>