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

    <link href="css/features.css" rel="stylesheet">

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
<?php
$feature = $conn -> query("SELECT * FROM anasayfa_feature") -> fetch_array();
?>
<div class="container px-4 py-5">
    <h2 class="pb-2 border-bottom">Vatansever Bisiklet</h2>

    <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
      <div class="col d-flex flex-column align-items-start gap-2">
        <h3 class="fw-bold"><?php echo $feature[0] ?></h3>
        <p class="text-body-secondary"><?php echo $feature[1] ?></p>
        <a href="<?php echo $feature[3] ?>" class="btn btn-primary btn-lg"><?php echo $feature[2] ?></a>
      </div>

      <div class="col">
        <div class="row row-cols-1 row-cols-sm-2 g-4">
          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                <?php echo $feature[4] ?>
            </div>
            <h4 class="fw-semibold mb-0"><?php echo $feature[5] ?></h4>
            <p class="text-body-secondary"><?php echo $feature[6] ?></p>
          </div>

          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                <?php echo $feature[7] ?>
            </div>
            <h4 class="fw-semibold mb-0"><?php echo $feature[8] ?></h4>
            <p class="text-body-secondary"><?php echo $feature[9] ?></p>
          </div>

          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                <?php echo $feature[10] ?>
            </div>
            <h4 class="fw-semibold mb-0"><?php echo $feature[11] ?></h4>
            <p class="text-body-secondary"><?php echo $feature[12] ?></p>
          </div>

          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                <?php echo $feature[13] ?>
            </div>
            <h4 class="fw-semibold mb-0"><?php echo $feature[14] ?></h4>
            <p class="text-body-secondary"><?php echo $feature[15] ?></p>
          </div>
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
