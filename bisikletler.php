<!doctype html>
<?php
include('baglan.php');
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$sqlQuery = "SELECT * FROM bisikletler WHERE id > 0";

if (isset($_POST['tur'])) {
  $turFiltre = implode("','", $_POST['tur']);
  $sqlQuery .= " AND bisiklet_tur IN ('".$turFiltre."')";
}
else {
echo "404";
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
    </style>
    <?php
    if (isset($_POST['tur'])) {
    if ($_POST['tur'] == ['ROAD']) {
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
      if (isset($_POST['tur'])) {
        if ($_POST['tur'] == ['MTB']) {
          echo "<p>Dağ Bisikletleri</p>";
        }
        if ($_POST['tur'] == ['ROAD']) {
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
        <form action="#" method="POST">
          <input type="hidden" id="tur"name="tur[]" value="<?php echo ''.implode($_POST['tur']).''; ?>">
        <div class="row">
          <h5 class="mt-4">Sürüş Tarzı</h5>
          <?php

          $modelsorgu = mysqli_query($conn,"select distinct bisiklet_tarz from bisikletler where bisiklet_tur in ('".implode($_POST['tur'])."')");
          $modelsayi = mysqli_num_rows($modelsorgu);

          if (isset($_POST['tarz'])) {
            $tarzFiltre = implode("','", $_POST['tarz']);
            $sqlQuery .= " AND bisiklet_tarz IN ('".$tarzFiltre."')";
          }

          while ($satir = mysqli_fetch_array($modelsorgu)) {
            ?>
            <div class="row">
            <div class="col-1">
            <input type="checkbox" id="tarz" name="tarz[]" value="<?php echo "$satir[0]"; ?>" <?php if (isset($_POST['tarz'])) if (in_array($satir[0],$_POST['tarz'])) echo'checked="checked"';  ?>>
            </div>
            <div class="col-10">
            <p class="text-muted"><?php echo "$satir[0]"; ?></p>
            </div>
            </div>
            <?php
          }

          ?>

        </div>
        <hr/>
        <div class="row">
          <h5 class="mt-2">Modeller</h5>
          <?php

          $modelsorgu = mysqli_query($conn,"select distinct bisiklet_model from bisikletler where bisiklet_tur in ('".implode($_POST['tur'])."')");
          $modelsayi = mysqli_num_rows($modelsorgu);

          if (isset($_POST['model'])) {
            $modelFiltre = implode("','", $_POST['model']);
            $sqlQuery .= " AND bisiklet_model IN ('".$modelFiltre."')";
          }

          while ($satir = mysqli_fetch_array($modelsorgu)) {
            ?>
            <div class="row">
            <div class="col-1">
            <input type="checkbox" id="model" name="model[]" value="<?php echo "$satir[0]"; ?>" <?php if (isset($_POST['model'])) if (in_array($satir[0],$_POST['model'])) echo'checked="checked"';  ?>>
            </div>
            <div class="col-10">
            <label class="text-muted"><?php echo "$satir[0]"; ?></label>
            </div>
            </div>
            <?php
          }
          
          ?>
        </div>
        <hr/>
        <div class="row">
          <h5 class="mt-2">Markalar</h5>
          <?php

          $modelsorgu = mysqli_query($conn,"select distinct bisiklet_marka from bisikletler where bisiklet_tur in ('".implode($_POST['tur'])."')");
          $modelsayi = mysqli_num_rows($modelsorgu);

          if (isset($_POST['marka'])) {
            $markaFiltre = implode("','", $_POST['marka']);
            $sqlQuery .= " AND bisiklet_marka IN ('".$markaFiltre."')";
          }

          while ($satir = mysqli_fetch_array($modelsorgu)) {
            ?>
            <div class="row">
            <div class="col-1">
            <input type="checkbox" id="marka" name="marka[]" value="<?php echo "$satir[0]"; ?>" <?php if (isset($_POST['marka'])) if (in_array($satir[0],$_POST['marka'])) echo'checked="checked"';  ?>>
            </div>
            <div class="col-10">
            <p class="text-muted"><?php echo "$satir[0]"; ?></p>
            </div>
            </div>
            <?php
          }

          ?>

        </div>
        <hr/>
        <div class="row">
          <h5 class="mt-2">Model Seviyesi</h5>
          <?php

          $modelsorgu = mysqli_query($conn,"select distinct bisiklet_model_2 from bisikletler where bisiklet_tur in ('".implode($_POST['tur'])."')");
          $modelsayi = mysqli_num_rows($modelsorgu);

          if (isset($_POST['seviye'])) {
            $seviyeFiltre = implode("','", $_POST['seviye']);
            $sqlQuery .= " AND bisiklet_model_2 IN ('".$seviyeFiltre."')";
          }

          while ($satir = mysqli_fetch_array($modelsorgu)) {
            ?>
            <div class="row">
            <div class="col-1">
            <input type="checkbox" id="seviye" name="seviye[]" value="<?php echo "$satir[0]"; ?>" <?php if (isset($_POST['seviye'])) if (in_array($satir[0],$_POST['seviye'])) echo'checked="checked"';  ?>>
            </div>
            <div class="col-10">
            <p class="text-muted"><?php if($satir[0] != "") echo "$satir[0]"; else echo "Base"; ?></p>
            </div>
            </div>
            <?php
          }

          ?>

        </div>
        <div class="row mt-4">
          <button type="submit" class="btn btn-block btn-dark" value="Submit">Filtrele</button>
        </div>
        </form>
      </div>
    </div>
    <div class="col-9">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

        <?php
        $bisikletsorgu = mysqli_query($conn,$sqlQuery);
        $bisikletsayi = mysqli_num_rows($bisikletsorgu);

        while ($satir = mysqli_fetch_array($bisikletsorgu)) {
          ?>
          <div class="col">
            <div class="card shadow">
              <?php echo '<a href="bisiklet.php?id='.$satir[0].'">'; ?><img class="card-img-top p-2" src="img/<?php echo "$satir[0]";?>/1.webp" alt="<?php if ($satir[2] == NULL) echo "$satir[1] $satir[3]"; else echo "$satir[2] $satir[3]"; ?>" width="100%" height="auto"></a>
              <div class="card-body">
                <h5 class="card-title"><?php if ($satir[2] == NULL) echo "$satir[1] $satir[3] $satir[4]"; else echo "$satir[2] $satir[3] $satir[4]"; ?></h5>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group mt-2">
                    <?php echo '<a href="bisiklet.php?id='.$satir[0].'">'; ?> <button type="button" class="btn btn-sm btn-outline-primary">İncele</button></a>
                  </div>
                  <small class="text-muted"><?php $test3 = number_format($satir[5]); echo "$test3"; ?>$</small>
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
      </div>
      </div>

</main>

<?php
include('footer.php');
?>


    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function () {

        if (localStorage.getItem("my_app_name_here-quote-scroll") != null) {
            $(window).scrollTop(localStorage.getItem("my_app_name_here-quote-scroll"));
        }

        $(window).on("scroll", function() {
            localStorage.setItem("my_app_name_here-quote-scroll", $(window).scrollTop());
        });

      });
    </script>

  </body>
</html>
