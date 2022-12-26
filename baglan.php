<?php
$conn = mysqli_connect("localhost","root","","bikes");
//echo("test");

/* baglanti kontrolu */

if ( mysqli_connect_errno()) {

    echo "Baglanti Basarisiz Hata : ".mysqli_connect_error();
    die();
}
else {
    //echo "Baglanti basarili";
    mysqli_query($conn,"SET NAMES 'utf8'");
}

/* baglantiyi sonlandirmak icin */
//mysqli_close($conn)

?>