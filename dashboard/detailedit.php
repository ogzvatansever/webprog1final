<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>Ayrıntıları Düzenle - Admin Paneli</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">

    

    

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="../index.php">Vatansever Bisiklet</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="../index.php">Panelden çık</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.php">
              <span data-feather="home" class="align-text-bottom"></span>
              Anasayfa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="orders.php">
              <span data-feather="file" class="align-text-bottom"></span>
              Siparisler
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="users.php">
              <span data-feather="shopping-cart" class="align-text-bottom"></span>
              Üyeler
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="items.php">
              <span data-feather="users" class="align-text-bottom"></span>
              Ürünler
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aedit.php">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              Anasayfa Verileri
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="a2edit.php">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              Hakkımızda
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <h2 class="mt-2">Bisikleti Düzenle</h2>
      <h2>Ayrıntılı Bilgiler</h2>
        <?php
        include("../baglan.php");
        $detay = $conn -> query("SELECT * FROM bisiklet_detay WHERE bisiklet_id = ".$_GET["bisiklet"]) -> fetch_array();
        ?>
        <form action="detailupdate.php" method="GET">
          <input type="hidden" id="bikeEditID" name="bisiklet" value="<?php echo $_GET["bisiklet"] ?>">
        <div class="form-floating mb-2">
            <input type="form-control" class="form-control" id="bikeEditKadro" name="bisiklet_kadro" placeholder=" " value="<?php echo $detay[2] ?>">
            <label for="bikeEditModel">Kadro</label>
        </div>
        <div class="form-floating mb-2">
            <input type="form-control" class="form-control" id="bikeEditSelekelepcesi" name="bisiklet_selekelepcesi" placeholder=" " value="<?php echo $detay[3] ?>">
            <label for="bikeEditSelekelepcesi">Sele Kelepçesi</label>
        </div>
        <div class="form-floating mb-2">
            <input type="form-control" class="form-control" id="bikeEditAksesuarlar" name="bisiklet_aksesuarlar" placeholder=" " value="<?php echo $detay[4] ?>">
            <label for="bikeEditAksesuarlar">Aksesuarlar</label>
        </div>
        <div class="form-floating mb-2">
            <input type="form-control" class="form-control" id="bikeEditArkasuspansiyon" name="bisiklet_arkasuspansiyon" placeholder=" " value="<?php echo $detay[5] ?>">
            <label for="bikeEditArkasuspansiyon">Arka Süspansiyon</label>
        </div>
        <div class="form-floating mb-2">
            <input type="form-control" class="form-control" id="bikeEditMasa" name="bisiklet_masa" placeholder=" " value="<?php echo $detay[6] ?>">
            <label for="bikeEditMasa">Maşa</label>
        </div>
        <div class="form-floating mb-2">
            <input type="form-control" class="form-control" id="bikeEditGidonbogazi" name="bisiklet_gidonbogazi" placeholder=" " value="<?php echo $detay[7] ?>">
            <label for="bikeEditGidonbogazi">Gidon Boğazı</label>
        </div>
        <div class="form-floating mb-2">
            <input type="form-control" class="form-control" id="bikeEditGidon" name="bisiklet_gidon" placeholder=" " value="<?php echo $detay[8] ?>">
            <label for="bikeEditGidon">Gidon</label>
        </div>
        <div class="form-floating mb-2">
            <input type="form-control" class="form-control" id="bikeEditElcik" name="bisiklet_elcik" placeholder=" " value="<?php echo $detay[9] ?>">
            <label for="bikeEditElcik">Elcik</label>
        </div>
        <div class="form-floating mb-2">
            <input type="form-control" class="form-control" id="bikeEditSele" name="bisiklet_sele" placeholder=" " value="<?php echo $detay[10] ?>">
            <label for="bikeEditSele">Sele</label>
        </div>
        <div class="form-floating mb-2">
            <input type="form-control" class="form-control" id="bikeEditSeleborusu" name="bisiklet_seleborusu" placeholder=" " value="<?php echo $detay[11] ?>">
            <label for="bikeEditSeleborusu">Sele Borusu</label>
        </div>
        <div class="form-floating mb-2">
            <input type="form-control" class="form-control" id="bikeEditOnfren" name="bisiklet_onfren" placeholder=" " value="<?php echo $detay[12] ?>">
            <label for="bikeEditOnfren">Ön Fren</label>
        </div>
        <div class="form-floating mb-2">
            <input type="form-control" class="form-control" id="bikeEditArkafren" name="bisiklet_arkafren" placeholder=" " value="<?php echo $detay[13] ?>">
            <label for="bikeEditArkafren">Arka Fren</label>
        </div>
        <div class="form-floating mb-2">
            <input type="form-control" class="form-control" id="bikeEditArkaaktarici" name="bisiklet_arkaaktarici" placeholder=" " value="<?php echo $detay[14] ?>">
            <label for="bikeEditArkaaktarici">Arka Aktarıcı</label>
        </div>
        <div class="form-floating mb-2">
            <input type="form-control" class="form-control" id="bikeEditOnaktarici" name="bisiklet_onaktarici" placeholder=" " value="<?php echo $detay[15] ?>">
            <label for="bikeEditOnaktarici">On Aktarıcı</label>
        </div>
        <div class="form-floating mb-2">
            <input type="form-control" class="form-control" id="bikeEditViteskollari" name="bisiklet_viteskollari" placeholder=" " value="<?php echo $detay[16] ?>">
            <label for="bikeEditViteskollari">Vites Kolları</label>
        </div>
        <div class="form-floating mb-2">
            <input type="form-control" class="form-control" id="bikeEditRuble" name="bisiklet_ruble" placeholder=" " value="<?php echo $detay[17] ?>">
            <label for="bikeEditRuble">Ruble</label>
        </div>
        <div class="form-floating mb-2">
            <input type="form-control" class="form-control" id="bikeEditZincir" name="bisiklet_zincir" placeholder=" " value="<?php echo $detay[18] ?>">
            <label for="bikeEditZincir">Zincir</label>
        </div>
        <div class="form-floating mb-2">
            <input type="form-control" class="form-control" id="bikeEditAynakol" name="bisiklet_aynakol" placeholder=" " value="<?php echo $detay[19] ?>">
            <label for="bikeEditAynakol">Aynakol</label>
        </div>
        <div class="form-floating mb-2">
            <input type="form-control" class="form-control" id="bikeEditAynakoldislisi" name="bisiklet_aynakoldislisi" placeholder=" " value="<?php echo $detay[20] ?>">
            <label for="bikeEditAynakoldislisi">Aynakol Dişlisi</label>
        </div>
        <div class="form-floating mb-2">
            <input type="form-control" class="form-control" id="bikeEditOrtagobek" name="bisiklet_ortagobek" placeholder=" " value="<?php echo $detay[21] ?>">
            <label for="bikeEditOrtagobek">Orta Göbek</label>
        </div>
        <div class="form-floating mb-2">
            <input type="form-control" class="form-control" id="bikeEditJantlar" name="bisiklet_jantlar" placeholder=" " value="<?php echo $detay[22] ?>">
            <label for="bikeEditJantlar">Jantlar</label>
        </div>
        <div class="form-floating mb-2">
            <input type="form-control" class="form-control" id="bikeEditOngobek" name="bisiklet_ongobek" placeholder=" " value="<?php echo $detay[23] ?>">
            <label for="bikeEditOngobek">Ön Göbek</label>
        </div>
        <div class="form-floating mb-2">
            <input type="form-control" class="form-control" id="bikeEditArkagobek" name="bisiklet_arkagobek" placeholder=" " value="<?php echo $detay[24] ?>">
            <label for="bikeEditArkagobek">Arka Göbek</label>
        </div>
        <div class="form-floating mb-2">
            <input type="form-control" class="form-control" id="bikeEditJantteli" name="bisiklet_jantteli" placeholder=" " value="<?php echo $detay[25] ?>">
            <label for="bikeEditJantteli">Jant Teli</label>
        </div>
        <div class="form-floating mb-2">
            <input type="form-control" class="form-control" id="bikeEditOnlastik" name="bisiklet_onlastik" placeholder=" " value="<?php echo $detay[26] ?>">
            <label for="bikeEditOnlastik">Ön Lastik</label>
        </div>
        <div class="form-floating mb-2">
            <input type="form-control" class="form-control" id="bikeEditArkalastik" name="bisiklet_arkalastik" placeholder=" " value="<?php echo $detay[27] ?>">
            <label for="bikeEditArkalastik">Arka Lastik</label>
        </div>
        <div class="form-floating mb-2">
            <input type="form-control" class="form-control" id="bikeEditIclastik" name="bisiklet_iclastik" placeholder=" " value="<?php echo $detay[28] ?>">
            <label for="bikeEditIclastik">İç Lastik</label>
        </div>
        <button class="btn btn-primary mb-5" type="submit">Kaydet</button>
        </form>
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
