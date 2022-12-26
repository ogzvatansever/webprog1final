<!doctype html>
<?php
include("baglan.php");
//ini_set('display_errors',1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Bisikletler</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
    </style>
        
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

    <?php
    $testid = $_GET['id'];
    $renkget = $_GET['renk'];
    $boyget = $_GET['boy'];
    $test = mysqli_query($conn,"select * from bisikletler where id='$testid'");
    $test1 = mysqli_fetch_array($test);
    $bisikletdetay = mysqli_fetch_array(mysqli_query($conn,"select * from bisiklet_detay where id='$testid'"))
    ?>
    <div class="container mt-5">
        <div class="row">
            <!-- <div class="col-9"> -->
                <div class="overflow-auto test123">
                    <div class="img-portrait">
                    <?php
                        $scanned_directory = array_diff(scandir("img/".$test1[0].""), array('.','..'));
                        foreach ($scanned_directory as $deger) {
                        echo "<img src='img/".$test1[0]."/".$deger."'width='100%'>";
                    }
                    ?>
                    </div>
                </div>
            <!--</div>-->
            <div class="col">
                <div class="container test2">
                    <form action="#" method="get">
                        <input type="hidden" name="id" value="<?php echo "$test1[0]"; ?>">
                    <h5><?php echo "$test1[1] $test1[2]" ?></h5>
                    <h6 class="text-muted"><?php $test3 = number_format($test1[3]); echo "$test3"; ?>$</h6>
                    <h6 style="margin-top: 2rem;">Renk</h6>
                    <div class="row text-center">
                        <div class="col-auto m-1">
                            <input type="radio" class="btn-check" name="renk" id="renk-1" value="<?php echo "$test1[4]"; ?>" autocomplete="off" <?php if ($renkget == $test1[4]) echo "checked";?>>
                            <label class="btn btn-sm btn-outline-dark" for="renk-1"><?php echo "$test1[4]"; ?></label>
                        </div>
                    </div>
                    <h6 style="margin-top: 2rem;">Kadro Boyu</h6>
                    <div class="row text-center">
                        <div class="d-grid gap-1">
                            <input type="radio" class="btn-check" name="boy" id="btn-s" value="S" autocomplete="off" <?php if ($boyget == "S") echo "checked"; ?>>
                            <label class="btn btn-sm btn-outline-dark" for="btn-s">S</label>
                            <input type="radio" class="btn-check" name="boy" id="btn-m" value="M" autocomplete="off" <?php if ($boyget == "M") echo "checked"; ?>>
                            <label class="btn btn-sm btn-outline-dark" for="btn-m">M</label>
                            <input type="radio" class="btn-check" name="boy" id="btn-l" value="L" autocomplete="off" <?php if ($boyget == "L") echo "checked"; ?>>
                            <label class="btn btn-sm btn-outline-dark" for="btn-l">L</label>
                            <input type="radio" class="btn-check" name="boy" id="btn-xl" value="XL" autocomplete="off" <?php if ($boyget == "XL") echo "checked"; ?>>
                            <label class="btn btn-sm btn-outline-dark" for="btn-xl">XL</label>
                        </div>
                    </div>
                    <h6 style="margin-top: 2rem;">Boy Yardımcısı</h6>
                    <div class="row text-center" style="margin-top: 2rem;">
                        <button type="submit" class="btn btn-dark btn-block">Sepete Ekle</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container">
            <hr/>
            <div class="row">
                <div class="col-11">
                    <h3>Ayrıntılı Bilgiler</h3>
                </div>
                <div class="col-1">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#Details" aria-controls="Details" aria-expanded="false" aria-label="Toggle navigation">
                    <img src="img/chevron-down.png" width="32px">
                    </button>
                </div>
            </div>
            <hr/>
            <div class="collapse" id="Details">
                <div class="container">
                    <div class="row mt-4">
                        <div class="col-2">
                            <h4>Kadroset</h4>
                        </div>
                        <div class="col-9">
                            <div class="row"><b>Kadro</b></div>
                            <div class="row"><p><?php echo "$bisikletdetay[2]";?></p></div>
                            <div class="row mt-2"><b>Sele Kelepçesi</b></div>
                            <div class="row"><p><?php echo "$bisikletdetay[3]";?></p></div>
                        </div>
                    </div>
                    <hr/>
                    <div class="row mt-4">
                        <div class="col-2">
                            <h4>Süspansiyon</h4>
                        </div>
                        <div class="col-9">
                            <div class="row"><b>Arka Süspansiyon</b></div>
                            <div class="row"><p><?php echo "$bisikletdetay[5]";?></p></div>
                            <div class="row mt-2"><b>Maşa</b></div>
                            <div class="row"><p><?php echo "$bisikletdetay[6]";?></p></div>
                        </div>
                    </div>
                    <hr/>
                    <div class="row mt-4">
                        <div class="col-2">
                            <h4>Kokpit</h4>
                        </div>
                        <div class="col-9">
                            <div class="row"><b>Gidon Boğazı</b></div>
                            <div class="row"><p><?php echo "$bisikletdetay[7]";?></p></div>
                            <div class="row mt-2"><b>Gidon</b></div>
                            <div class="row"><p><?php echo "$bisikletdetay[8]";?></p></div>
                            <div class="row mt-2"><b>Elcik</b></div>
                            <div class="row"><p><?php echo "$bisikletdetay[9]";?></p></div>
                            <div class="row mt-2"><b>Sele</b></div>
                            <div class="row"><p><?php echo "$bisikletdetay[10]";?></p></div>
                            <div class="row mt-2"><b>Sele Borusu</b></div>
                            <div class="row"><p><?php echo "$bisikletdetay[11]";?></p></div>
                        </div>
                    </div>
                    <hr/>
                    <div class="row mt-4">
                        <div class="col-2">
                            <h4>Frenler</h4>
                        </div>
                        <div class="col-9">
                            <div class="row"><b>Ön Fren</b></div>
                            <div class="row"><p><?php echo "$bisikletdetay[12]";?></p></div>
                            <div class="row mt-2"><b>Arka Fren</b></div>
                            <div class="row"><p><?php echo "$bisikletdetay[13]";?></p></div>
                        </div>
                    </div>
                    <hr/>
                    <div class="row mt-4">
                        <div class="col-2">
                            <h4>Grupset</h4>
                        </div>
                        <div class="col-9">
                            <div class="row"><b>Arka Aktarıcı</b></div>
                            <div class="row"><p><?php echo "$bisikletdetay[14]";?></p></div>
                            <?php
                            if ($bisikletdetay[15] != NULL) {
                                echo '<div class="row mt-2"><b>Ön Aktarıcı</b></div>';
                                echo '<div class="row"><p>'.$bisikletdetay[15].'</p></div>';
                            }
                            ?>
                            <div class="row mt-2"><b>Vites Kolları</b></div>
                            <div class="row"><p><?php echo "$bisikletdetay[16]";?></p></div>
                            <div class="row mt-2"><b>Ruble</b></div>
                            <div class="row"><p><?php echo "$bisikletdetay[17]";?></p></div>
                            <div class="row mt-2"><b>Zincir</b></div>
                            <div class="row"><p><?php echo "$bisikletdetay[18]";?></p></div>
                            <div class="row mt-2"><b>Aynakol</b></div>
                            <div class="row"><p><?php echo "$bisikletdetay[19]";?></p></div>
                            <div class="row mt-2"><b>Aynakol Dişlisi</b></div>
                            <div class="row"><p><?php echo "$bisikletdetay[20]";?></p></div>
                            <div class="row mt-2"><b>Orta Göbek</b></div>
                            <div class="row"><p><?php echo "$bisikletdetay[21]";?></p></div>
                        </div>
                    </div>
                    <hr/>
                    <div class="row mt-4">
                        <div class="col-2">
                            <h4>Tekerlekler</h4>
                        </div>
                        <div class="col-9">
                            <div class="row"><b>Jantlar</b></div>
                            <div class="row"><p><?php echo "$bisikletdetay[22]";?></p></div>
                            <div class="row mt-2"><b>Ön Göbek</b></div>
                            <div class="row"><p><?php echo "$bisikletdetay[23]";?></p></div>
                            <div class="row mt-2"><b>Arka Göbek</b></div>
                            <div class="row"><p><?php echo "$bisikletdetay[24]";?></p></div>
                            <div class="row mt-2"><b>Jant Teli</b></div>
                            <div class="row"><p><?php echo "$bisikletdetay[25]";?></p></div>
                            <div class="row mt-2"><b>Ön Lastik</b></div>
                            <div class="row"><p><?php echo "$bisikletdetay[26]";?></p></div>
                            <div class="row mt-2"><b>Arka Lastik</b></div>
                            <div class="row"><p><?php echo "$bisikletdetay[27]";?></p></div>
                            <div class="row mt-2"><b>İç Lastik</b></div>
                            <div class="row"><p><?php echo "$bisikletdetay[28]";?></p></div>
                        </div>
                    </div>
                    <hr/>
                    <div class="row mt-4">
                        <div class="col-2">
                            <h4>Aksesuarlar</h4>
                        </div>
                        <div class="col-9">
                            <div class="row"><b><?php echo "$bisikletdetay[4]";?></b></div>
                            <div class="row"><p><?php echo "$bisikletdetay[4]";?></p></div>
                        </div>
                    </div>
                    <hr/>
                </div>
            </div>
            <div class="row">
                <div class="col-11 mt-5">
                    <h3>Kullanıcı Yorumları</h3>
                </div>
            </div>
            <div class="row mb-2">
                <p>Henüz bir kullanıcı yorumu yok. İlk Yorumu yapan sen ol.</p>
            </div>
        </div>
    </div>
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