<header class="p-3 mb-5 border-bottom fixed-top bg-light">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 me-2 link-body-emphasis text-decoration-none">
          <img src="img/logo.svg" height="40px"></img>
        </a>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="index.php" class="nav-link px-2 link-dark">Anasayfa</a></li>
          <div class="dropdown text-end">
            <a href="#" class="nav-link px-2 dropdown-toggle link-dark" data-bs-toggle="dropdown" aria-expanded="false">
            Bisikletler
            </a>
            <ul class="dropdown-menu text-small">
              <li><a href="bisikletler.php?tur%5B%5D=MTB" class="dropdown-item">Dağ Bisikletleri</a></li>
              <li><a href="bisikletler.php?tur%5B%5D=ROAD" class="dropdown-item">Yol Bisikletleri</a></li>
            </ul>
          </div>
          <li><a href="#" class="nav-link px-2 link-dark">Hakkımızda</a></li>
        </ul>

          <?php
          session_start();
          if (isset($_SESSION["logged-in"])) {
            ?>
        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="img/profile.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="orders.php">Siparişlerim</a></li>
            <li><a class="dropdown-item" href="#">Bilgilerim</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a href="sign-in/logout.php" class="dropdown-item" href="#">Çıkış Yap</a></li>
          </ul>
          </div>
            <?php
          }
          else {
            ?>
            <a href="sign-in" class="nav-link px-2 link-dark">Giriş Yap</a>
          <?php
          }
          ?>
          
        
        <a href="#" type="button" class="link-dark position-relative ms-2 p-0" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" onclick="refreshSepet()">
        <i style="font-size: x-large;" class="bi bi-cart2"></i>
        <span id="sepet-miktar-badge" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
        0
        </span>
        </a>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
          <div class="offcanvas-header">
            <h3 class="offcanvas-title" id="offcanvasRightLabel">Sepetiniz</h3>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <hr>
          <div id="sepet-body" class="offcanvas-body">
<!--
            <div class="row">
              <div class="card mb-3" style="max-width: 100%;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <a href="#">
                      <img src="img/1/1.webp" class="img-fluid rounded-start mt-2">
                    </a>
                  </div>
                  <div class="col-md-8">
                    <div class="card-body m-0 p-0">
                      <a href="#" class="card-text m-0 mt-1 ms-2 p-0 link-dark text-decoration-none">S-Works Epic</a>
                      <p class="card-text m-0 ms-2 p-0" style="text-overflow: ellipsis; white-space: nowrap; overflow: hidden;"><small class="text-body-secondary">M - SATIN CARBON / COLOR RUN BLUE MURANO PEARL / GLOSS CHROME FOIL LOGOS</small></p>
                      <a href="#" class="link-danger"><p class="float-end mx-2"><i class="bi bi-x-square"></i></p></a>
                      <a href="#" class="link-warning"><p class="float-end mx-1"><i class="bi bi-dash-square"></i></p></a>
                      <p class="float-end">1</p>
                      <a href="#" class="link-success"><p class="float-end mx-1"><i class="bi bi-plus-square"></i></p></a>
                      <p class="card-text m-0 ms-2 p-0"><small class="text-body-secondary">12,000$</small></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
-->
          </div>
          <div class="offcanvas-footer">
            <div class="container mx-1">

              <div class="row">
                <div class="col-3 ms-1">
                  <h6 class="m-0" style="white-space: nowrap;">Ara Toplam: </h6>
                  <p id="sepet-toplam" class="m-0 mb-1">0$</p>
                </div>
                <div class="col-8 mb-1" style="margin-inline-end: 5px; margin-inline-start: 20px;">
                  <div class="row">
                    <a href="checkout.php" type="button" class="btn btn-dark btn-block">Satın Al</a>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <script src="js/jquery-3.6.3.js"></script>
  <script src="js/sepet.js"></script>
  <script src="js/functions.js"></script>