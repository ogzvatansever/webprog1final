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
    include('404.php');
    die();
  }

if (isset($_POST['tarz'])) {
    $tarzFiltre = implode("','", $_POST['tarz']);
    $sqlQuery .= " AND bisiklet_tarz IN ('".$tarzFiltre."')";
  }

if (isset($_POST['model'])) {
    $modelFiltre = implode("','", $_POST['model']);
    $sqlQuery .= " AND bisiklet_model IN ('".$modelFiltre."')";
  }

if (isset($_POST['marka'])) {
    $markaFiltre = implode("','", $_POST['marka']);
    $sqlQuery .= " AND bisiklet_marka IN ('".$markaFiltre."')";
  }

if (isset($_POST['seviye'])) {
    $seviyeFiltre = implode("','", $_POST['seviye']);
    $sqlQuery .= " AND bisiklet_model_2 IN ('".$seviyeFiltre."')";
  }



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