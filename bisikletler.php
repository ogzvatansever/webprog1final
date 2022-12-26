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
    <title>Bisikletler</title>
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    
<header>
  <div class="navbar navbar-light bg-light shadow-sm">
    <div class="container">
      <a href="bisikletler.php" class="navbar-brand d-flex align-items-center">
        <strong>Vatansever Bisiklet</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <img src="img/shopping-cart--v1.png" width="32px">
      </button>
    </div>
  </div>
</header>

<main>
  <div class="parallax">
    <div class="parallaxtitle">
      <p>Bisikletler</p>
    </div>
  </div>
  <div class="album py-5 bg-light">
    <div class="container overflow-auto">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        <?php
        $bisikletsorgu = mysqli_query($conn,"select * from bisikletler");
        $bisikletsayi = mysqli_num_rows($bisikletsorgu);

        while ($satir = mysqli_fetch_array($bisikletsorgu)) {
          ?>
          <div class="col">
            <div class="card shadow">
              <?php echo '<a href="bisiklet.php?id='.$satir[0].'">'; ?><img class="card-img-top p-2" src="img/<?php echo "$satir[0]";?>/1.webp" alt="<?php echo "$satir[1] $satir[2]" ?>" width="100%" height="auto"></a>
              <div class="card-body">
                <h5 class="card-title"><?php echo "$satir[1] $satir[2]"; ?></h5>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group mt-2">
                    <?php echo '<a href="bisiklet.php?id='.$satir[0].'">'; ?> <button type="button" class="btn btn-sm btn-outline-primary">İncele</button></a>
                  </div>
                  <small class="text-muted"><?php $test3 = number_format($satir[3]); echo "$test3"; ?>$</small>
                </div>
              </div>
            </div>
          </div>
        <?php
        }  
        ?>

      </div>
    </div>
  </div>

</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Yukarı çık</a>
    </p>
    <p class="mb-1">Vatansever Bisiklet diye bir kuruluş yoktur.</p>
    <p class="mb-0">Görseller ve içerikler temsilidir.</p>
  </div>
</footer>


    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
