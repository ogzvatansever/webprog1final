<!doctype html>
<?php
include('baglan.php');
include('functions.php');
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$sqlQuery = "SELECT * FROM bisikletler WHERE id > 0";

if (isset($_GET['tur'])) {
  $turFiltre = implode("','", $_GET['tur']);
  $sqlQuery .= " AND bisiklet_tur IN ('".$turFiltre."')";
}
else {
  include('404.php');
  die();
}

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Oğuz Vatansever">
    <title>Bisikletler</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="icon" href="favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
    </style>
    <?php
    if (isset($_GET['tur'])) {
    if ($_GET['tur'] == ['ROAD']) {
      ?>
      <style>
        .parallax {
          background-image: url("img/bikes4.jpg");
          background-position: bottom;
    }
      </style>
      <?php
    }
  }
    ?>
</head>
<body>
    
<?php
include('header.php');
?>

<main>
  <div class="parallax">
    <div class="parallaxtitle">
      <?php
      if (isset($_GET['tur'])) {
        if ($_GET['tur'] == ['MTB']) {
          echo "<p>Dağ Bisikletleri</p>";
        }
        if ($_GET['tur'] == ['ROAD']) {
          echo "<p>Yol Bisikletleri</p>";
        }
      }

      ?>
    </div>
  </div>
  <div class="album py-5 bg-light">
    <div class="container-fluid">
    <div class="row">
    <div class="col-2">
      <div class="container filtreleme border">
        <form id="sorgu" method="POST">
          <input type="hidden" id="tur"name="tur[]" value="<?php echo ''.implode($_GET['tur']).''; ?>">
        <div class="row">
          <h5 class="mt-4">Sürüş Tarzı</h5>
          <?php
          getFiltreDetay($conn,"bisiklet_tarz","tarz");
          ?>
        </div>
        <hr/>
        <div class="row">
          <h5 class="mt-2">Modeller</h5>
          <?php
          getFiltreDetay($conn,"bisiklet_model","model");
          ?>
        </div>
        <hr/>
        <div class="row">
          <h5 class="mt-2">Markalar</h5>
          <?php
          getFiltreDetay($conn,"bisiklet_marka","marka");
          ?>
        </div>
        <hr/>
        <div class="row">
          <h5 class="mt-2">Model Seviyesi</h5>
          <?php
          getFiltreDetay($conn,"bisiklet_model_2","seviye");
          ?>
        </div>
        <div class="row mt-4">
          <button id="filtrebuton" type="submit" class="btn btn-block btn-dark" value="Submit">Filtrele</button>
        </div>
        </form>
      </div>
    </div>
    <div class="col-9">
      <div id="sorgular" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php
        foreach (range(0,5) as $value) {
          ?>
          <div class="col">
            <div class="card shadow" aria-hidden="true">
              <!--<img class="card-img-top p-2" src="img/1/1.webp" class="card-img-top" alt="...">-->
              <svg class="bd-placeholder-img card-img-top" width="100%" height="262px" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="lightgray"/></svg>
              <div class="card-body">
                <h5 class="card-title placeholder-glow">
                  <span class="placeholder col-6"></span>
                </h5>
                <p class="card-text placeholder-glow">
                  <span class="placeholder col-7"></span>
                  <span class="placeholder col-4"></span> 
                </p>
                <a href="#" tabindex="-1" class="btn btn-sm btn-primary disabled placeholder col-2"></a>
              </div>
            </div>
          </div>
          <?php
        }
        ?>
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
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="js/sorgu.js"></script>

  </body>
</html>
