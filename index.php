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
    <link rel="icon" href="img/favicon.ico">
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

$sql = "SELECT * FROM anasayfa ORDER BY carousel_sira ASC";
?>

<main>
<div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel" >
    <div class="carousel-indicators">
        <?php
        $carouselSorgu = mysqli_query($conn,$sql);
        $testitem = range(0,mysqli_num_rows($carouselSorgu)-1);
    
        foreach ($testitem as $slayt) {
            ?>
            <button style="width: 128px; height: 8px;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo "$slayt";?>"  <?php if ($slayt == 0) echo "class='active' aria-current='true'"; ?> aria-label="Slide"></button>
            <?php
        }
        ?>
    </div>
    <div class="carousel-inner">
    <?php
    $carouselSorgu = mysqli_query($conn,$sql);
    //print_r(mysqli_fetch_array ($carouselSorgu));
    while ($slayt = mysqli_fetch_array($carouselSorgu)) {
        ?>
        <div class="carousel-item <?php if ($slayt[0]== 1) echo "active"; ?>">
            <img src="img/<?php echo "$slayt[3]"; ?>" width="100%">
            <div class="carousel-caption">
                <h3><?php echo "$slayt[1]"; ?></h3>
                <h3><?php echo "$slayt[2]"; ?></h3>
                <form action="<?php echo "$slayt[5]"; ?>" method="get">
                <input type="hidden" id="<?php echo "$slayt[6]"; ?>" name="<?php echo "$slayt[7]"; ?>" value="<?php echo "$slayt[8]"; ?>">
                <button type="submit" class="btn btn-lg btn-block btn-light" for="<?php echo "$slayt[6]"; ?>"><?php echo "$slayt[4]"; ?></button>
                </form>
            </div>
        </div>
        <?php
    }
    ?>
    </div>
</div>

</main>

<?php
include('footer.php');
?>

<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
      
</body>
</html>
