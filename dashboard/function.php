<?php
include('../baglan.php');
//select * from siparis where date > date_sub(current_date(),interval 6 day) and date < date_sub(current_date(),interval 5 day)  ;  
$testarray = [] ;
$gun7 = $conn -> query("SELECT * FROM siparis WHERE date > date_sub(current_date(),interval 7 day) and date < date_sub(current_date(),interval 6 day)");
$outnumber = 0 ;
while ($siparis = mysqli_fetch_array($gun7)) {
    $gun72 = $conn -> query("SELECT bisiklet_id FROM sepet_detay WHERE sepet_id = ".$siparis[1]) ;
    while ($sepetdetay = mysqli_fetch_array($gun72)) {
        $yeniquery = $conn -> query("SELECT bisiklet_fiyat FROM bisikletler WHERE id = ".$sepetdetay[0]) -> fetch_column() ;
        $outnumber += $yeniquery;
    }
}
array_push($testarray,$outnumber);

$gun6 = $conn -> query("SELECT * FROM siparis WHERE date > date_sub(current_date(),interval 6 day) and date < date_sub(current_date(),interval 5 day)");
$outnumber = 0 ;
while ($siparis = mysqli_fetch_array($gun6)) {
    $gun62 = $conn -> query("SELECT bisiklet_id FROM sepet_detay WHERE sepet_id = ".$siparis[1]) ;
    while ($sepetdetay = mysqli_fetch_array($gun62)) {
        $yeniquery = $conn -> query("SELECT bisiklet_fiyat FROM bisikletler WHERE id = ".$sepetdetay[0]) -> fetch_column() ;
        $outnumber += $yeniquery;
    }
}
array_push($testarray,$outnumber);

$gun5 = $conn -> query("SELECT * FROM siparis WHERE date > date_sub(current_date(),interval 5 day) and date < date_sub(current_date(),interval 4 day)");
$outnumber = 0 ;
while ($siparis = mysqli_fetch_array($gun5)) {
    $gun52 = $conn -> query("SELECT bisiklet_id FROM sepet_detay WHERE sepet_id = ".$siparis[1]) ;
    while ($sepetdetay = mysqli_fetch_array($gun52)) {
        $yeniquery = $conn -> query("SELECT bisiklet_fiyat FROM bisikletler WHERE id = ".$sepetdetay[0]) -> fetch_column() ;
        $outnumber += $yeniquery;
    }
}
array_push($testarray,$outnumber);

$gun4 = $conn -> query("SELECT * FROM siparis WHERE date > date_sub(current_date(),interval 4 day) and date < date_sub(current_date(),interval 3 day)");
$outnumber = 0 ;
while ($siparis = mysqli_fetch_array($gun4)) {
    $gun42 = $conn -> query("SELECT bisiklet_id FROM sepet_detay WHERE sepet_id = ".$siparis[1]) ;
    while ($sepetdetay = mysqli_fetch_array($gun42)) {
        $yeniquery = $conn -> query("SELECT bisiklet_fiyat FROM bisikletler WHERE id = ".$sepetdetay[0]) -> fetch_column() ;
        $outnumber += $yeniquery;
    }
}
array_push($testarray,$outnumber);

$gun3 = $conn -> query("SELECT * FROM siparis WHERE date > date_sub(current_date(),interval 3 day) and date < date_sub(current_date(),interval 2 day)");
$outnumber = 0 ;
while ($siparis = mysqli_fetch_array($gun3)) {
    $gun32 = $conn -> query("SELECT bisiklet_id FROM sepet_detay WHERE sepet_id = ".$siparis[1]) ;
    while ($sepetdetay = mysqli_fetch_array($gun32)) {
        $yeniquery = $conn -> query("SELECT bisiklet_fiyat FROM bisikletler WHERE id = ".$sepetdetay[0]) -> fetch_column() ;
        $outnumber += $yeniquery;
    }
}
array_push($testarray,$outnumber);

$gun2 = $conn -> query("SELECT * FROM siparis WHERE date > date_sub(current_date(),interval 2 day) and date < date_sub(current_date(),interval 1 day)");
$outnumber = 0 ;
while ($siparis = mysqli_fetch_array($gun2)) {
    $gun22 = $conn -> query("SELECT bisiklet_id FROM sepet_detay WHERE sepet_id = ".$siparis[1]) ;
    while ($sepetdetay = mysqli_fetch_array($gun22)) {
        $yeniquery = $conn -> query("SELECT bisiklet_fiyat FROM bisikletler WHERE id = ".$sepetdetay[0]) -> fetch_column() ;
        $outnumber += $yeniquery;
    }
}
array_push($testarray,$outnumber);

$gun1 = $conn -> query("SELECT * FROM siparis WHERE date > date_sub(current_date(),interval 1 day) and date < date_sub(current_date(),interval 0 day)");
$outnumber = 0 ;
while ($siparis = mysqli_fetch_array($gun1)) {
    $gun12 = $conn -> query("SELECT bisiklet_id FROM sepet_detay WHERE sepet_id = ".$siparis[1]) ;
    while ($sepetdetay = mysqli_fetch_array($gun12)) {
        $yeniquery = $conn -> query("SELECT bisiklet_fiyat FROM bisikletler WHERE id = ".$sepetdetay[0]) -> fetch_column() ;
        $outnumber += $yeniquery;
    }
}
array_push($testarray,$outnumber);

echo json_encode($testarray);
?>