<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" href="img/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <title>Siparişlerim</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
    </style>
</head>
<body>

<?php
include('header.php');
if (!isset($_SESSION["logged-in"])) {
    header("Location: index.php");
}
?>

<div class="container" style="margin-top: 100px; min-height: 72vh;">
    <h1 class="mb-5">Siparişler</h1>
    <?php
    include('baglan.php');
    $siparissorgu = mysqli_query($conn,"SELECT * FROM siparis WHERE buyer ='".$_SESSION["user"]."'");
    $sorgusayi = mysqli_num_rows($siparissorgu);
    if ($sorgusayi < 1) {
        ?>
        <div class="row mt-3">
            <div class="col">Hiç siparişiniz yok, yeni bir bisiklet bakmaya ne dersiniz?</div>
        </div>
        <?php
    }
    while ($satir = mysqli_fetch_array($siparissorgu)) {
        $siparisdetaysorgu = mysqli_query($conn,"SELECT * FROM sepet_detay WHERE sepet_id = ".$satir[1]);
        while ($detaysatir = mysqli_fetch_array($siparisdetaysorgu)) {
            echo $detaysatir[2];
        }
        ?>
        <div class="row mt-3">
            <div class="col">Column</div>
        </div>
        <?php
    }
    ?>
    
</div>

<?php
include('footer.php');
?>


    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="js/sorgu.js"></script>
</body>
</html>