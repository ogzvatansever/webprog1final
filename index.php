<!doctype html>
<?php
include('baglan.php');
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Oğuz Vatansever">
    <title>Vatansever Bisiklet</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
    </style>
</head>
<body>
    
<?php
include('header.php');
?>

<main>
<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel" >
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <!--<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>-->
    </div>
    <div class="carousel-inner">
        <div id="" class="carousel-item active">
            <img id="" class="" src="img/bikes2.jpg" width="100%">
            <div class="carousel-caption">
                <h3>Yılın En İyi</h3>
                <h3>Dağ Bisikletleri</h3>
                <form action="bisikletler.php" method="post">
                <input type="hidden" id="tur" name="tur[]" value="MTB">
                <button type="submit" class="btn btn-lg btn-block btn-light" for="tur">Şimdi İncele</button>
                </form>
            </div>
        </div>
        <div id="" class="carousel-item">
            <img id="" class="" src="img/bikes3.jpg" width="100%">
            <div class="carousel-caption">
                <h3>Yılın En İyi</h3>
                <h3>Yol Bisikletleri</h3>
                <form action="bisikletler.php" method="post">
                <input type="hidden" id="tur" name="tur[]" value="ROAD">
                <button type="submit" class="btn btn-lg btn-block btn-light" for="tur">Şimdi İncele</button>
                </form>
            </div>
        </div>
    </div>
</div>
</main>

<?php
include('footer.php');
?>

    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
      
  </body>
</html>
