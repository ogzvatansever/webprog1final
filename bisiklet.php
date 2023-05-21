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
    <title>Bisikletler</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
        </style>
    
    <script src="js/jquery-3.6.3.js"></script>
    <script src="js/sepet.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="img/favicon.ico">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<?php
include('header.php');
?>

    <?php
    $testid = $_GET['id'];
    @$renkget = $_GET['param_renk'];
    @$boyget = $_GET['param_beden'];
    $test = mysqli_query($conn,"select * from bisikletler where id='$testid'");
    if (mysqli_num_rows($test) != 1) {
        include("404.php");
        die();
    }
    $test1 = mysqli_fetch_array($test);
    $bisikletdetay = mysqli_fetch_array(mysqli_query($conn,"select * from bisiklet_detay where id='$testid'"))
    ?>
    <div class="container" style="margin-top: 64px;">
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
                    <form id="bisiklet" action="#" method="get" onsubmit="event.preventDefault(); addSepet();">
                        <input type="hidden" name="option" value="sepet-ekle">
                        <input type="hidden" name="param_id" value="<?php echo "$test1[0]"; ?>">
                    <h5> <?php if ($test1[2] == NULL) echo "$test1[1] $test1[3] $test1[4]"; else echo "$test1[2] $test1[3] $test1[4]"; ?></h5>
                    <h6 class="text-muted"><?php $test3 = number_format($test1[5]); echo "$test3"; ?>$</h6>
                    <h6 style="margin-top: 2rem;">Renk</h6>
                    <div class="row text-center">
                        <div class="col-auto m-1">
                            <input type="radio" class="btn-check" name="param_renk" id="renk" value="<?php echo "$test1[6]"; ?>" autocomplete="off" <?php if ($renkget == $test1[6]) echo "checked";?>>
                            <label class="btn btn-sm btn-outline-dark" for="renk"><?php echo "$test1[6]"; ?></label>
                        </div>
                    </div>
                    <h6 style="margin-top: 2rem;">Kadro Boyu</h6>
                    <div class="row text-center">
                        <div class="d-grid gap-1">
                            <input type="radio" class="btn-check" name="param_beden" id="btn-s" value="S" autocomplete="off" <?php if ($boyget == "S") echo "checked"; ?>>
                            <label class="btn btn-sm btn-outline-dark" for="btn-s">S</label>
                            <input type="radio" class="btn-check" name="param_beden" id="btn-m" value="M" autocomplete="off" <?php if ($boyget == "M") echo "checked"; ?>>
                            <label class="btn btn-sm btn-outline-dark" for="btn-m">M</label>
                            <input type="radio" class="btn-check" name="param_beden" id="btn-l" value="L" autocomplete="off" <?php if ($boyget == "L") echo "checked"; ?>>
                            <label class="btn btn-sm btn-outline-dark" for="btn-l">L</label>
                            <input type="radio" class="btn-check" name="param_beden" id="btn-xl" value="XL" autocomplete="off" <?php if ($boyget == "XL") echo "checked"; ?>>
                            <label class="btn btn-sm btn-outline-dark" for="btn-xl">XL</label>
                        </div>
                    </div>
                    <a href="#" style="text-decoration: none; color: inherit;" data-bs-toggle="modal" data-bs-target="#sizeModal"><h6 style="margin-top: 2rem;">Boy Yardımcısı</h6></a>
                    <div class="modal fade" id="sizeModal" tabindex="-1" aria-labelledby="sizeModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <img src="https://i.shgcdn.com/71d556dd-2364-4c55-ada3-ddd76caa4712/-/format/auto/-/preview/3000x3000/-/quality/lighter/">
                            </div>
                        </div>
                    </div>
                    <div class="row text-center" style="margin-top: 2rem;">
                        <button type="submit" class="btn btn-dark btn-block" value="Submit">Sepete Ekle</button>
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
                <?php
                $yorumsorgu = mysqli_query($conn,"SELECT * FROM kullaniciyorumlari WHERE bisiklet_id = ".$test1[0]."");
                $yorumsayi = mysqli_num_rows($yorumsorgu);

                if ($yorumsayi < 1) {
                    echo "<p>Henüz bir kullanıcı yorumu yok. İlk Yorumu yapan sen ol.</p>";
                }

                else {
                    ?>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <?php

                    while ($yorum = mysqli_fetch_array($yorumsorgu)) {
                        ?>
                        <div class="col">
                            <div class="card shadow">
                            <div class="card-body">

                                <span name="1" class="fa fa-star yorum-<?php echo "$yorum[0]"; ?>"></span>
                                <span name="2" class="fa fa-star yorum-<?php echo "$yorum[0]"; ?>"></span>
                                <span name="3" class="fa fa-star yorum-<?php echo "$yorum[0]"; ?>"></span>
                                <span name="4" class="fa fa-star yorum-<?php echo "$yorum[0]"; ?>"></span>
                                <span name="5" class="fa fa-star yorum-<?php echo "$yorum[0]"; ?>"></span>
                                <h5 class="card-title mt-2"><?php echo "$yorum[5]"; ?></h5>
                                <h6 class="card-subtitles text-muted"><?php echo "$yorum[2]"; ?></h6>

                                <script>
                                    $( document ).ready(function(){
                                        $('.yorum-<?php echo "$yorum[0]"; ?>').addClass('checked');
                                        var count = <?php echo "$yorum[4]"; ?>; 
                                        puan = count;
                                        for (var i=5; i>count-1; i--){        
                                            $('.yorum-<?php echo "$yorum[0]"; ?>').eq(i).removeClass('checked');
                                        }
                                    });
                                </script>
                                <div class="d-flex justify-content-between align-items-center">
                                <p class="card-text mt-3"><?php echo "$yorum[6]"; ?></p>
                                </div>
                            </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="row mb-2">
                <div class="col-2">
                    <div class="row mt-5">
                        <button type="button" class="btn btn-lg btn-block btn-dark" data-bs-toggle="modal" data-bs-target="#yorumModal">Yorum Yap</button>
                    </div>
                    <div class="modal fade" id="yorumModal" tabindex="-1" aria-labelledby="yorumModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="yorumModalLabel">Yorum Yap</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form name="yorumModal" action="action.php" onsubmit="return validateForm()" method="GET">
                                    <input type="hidden" id="yorumInputbisikletid" name="bisiklet_id" value="<?php echo "$test1[0]"; ?>">
                                    <div class="form-floating mb-3">
                                        <input type="form-control" class="form-control" id="yorumInputisim" name="isim" placeholder=" ">
                                        <label for="yorumInputisim" class="form-label">Adınız: </label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" id="yorumInputeposta" name="eposta" aria-describedby="emailHelp" placeholder="ornek@eposta.com">
                                        <label for="yorumInputeposta" class="form-label">E-Postanız: </label>
                                    </div>
                                    <div class="mb-2">
                                        <label class="mb-1">Puanınız: </label></br>
                                        <span name="1" class="fa fa-star yorum-star"></span>
                                        <span name="2" class="fa fa-star yorum-star"></span>
                                        <span name="3" class="fa fa-star yorum-star"></span>
                                        <span name="4" class="fa fa-star yorum-star"></span>
                                        <span name="5" class="fa fa-star yorum-star"></span>
                                        <input type="hidden" id="yorumInputpuan" name="puan" value="">
                                        <script>
                                            $('.yorum-star').on('click', function(){
                                                $('.yorum-star').addClass('checked');
                                                var count = $(this).attr('name'); 
                                                puan = count;
                                                for (var i=5; i>count-1; i--){        
                                                    $('.yorum-star').eq(i).removeClass('checked');
                                                }
                                                document.getElementById('yorumInputpuan').value = puan;
                                            });
                                        </script>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="form-control" class="form-control" id="yorumInputbaslik" name="baslik" placeholder=" ">
                                        <label for="yorumInputbaslik" class="form-label">Yorum Başlığınız: </label>
                                    </div>
                                    <div class="mb-3">
                                        <textarea type="form-control" class="form-control" id="yorumInputyorum" name="yorum" rows="7" placeholder="Yorumunuzu buraya yazın. Bize ve başka müşterilerimize satın aldığınız ürünün neresini sevip neresini sevmediğinizi anlatın."></textarea>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
                                <button onclick="" type="submit" class="btn btn-primary">Yorumu Gönder</button>
                            </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include('footer.php');
?>
<script>
var isim = "";
var eposta = "";
var puan = "";
var baslik = "";
var yorum = "";

function validateForm() {
  isim = document.forms["yorumModal"]["yorumInputisim"].value;
  if (isim == "") {
    alert("Adınızı doldurmalısınız.");
    return false;
  }

  eposta = document.forms["yorumModal"]["yorumInputeposta"].value;
  if (eposta == "") {
    alert("Epostanızı doldurmalısınız.");
    return false;
  }

  //let puan = document.forms["yorumModal"]["yorumInputpuan"].value;
  if (puan == "") {
    alert("Puan vermelisiniz.");
    return false;
  }

  baslik = document.forms["yorumModal"]["yorumInputbaslik"].value;
  if (baslik == "") {
    alert("Yorum başlığını yazmalısınız.");
    return false;
  }

  yorum = document.forms["yorumModal"]["yorumInputyorum"].value;
  if (yorum == "") {
    alert("Yorum yapmalısınız.");
    return false;
  }
}

</script>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>