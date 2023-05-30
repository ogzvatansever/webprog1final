<?php
include('baglan.php');
//select * from siparis where date > date_sub(current_date(),interval 6 day) and date < date_sub(current_date(),interval 5 day)  ;  
$conn -> query("SELECT * FROM siparis WHERE date < date_sub(current_timestamp(),INTERVAL 1 DAY)") -> fetch_array();
$testarray = [12000,5000];
echo json_encode($testarray);
?>