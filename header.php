<!--
<header>
  <div class="navbar fixed-top navbar-light bg-light shadow-sm">
    <div class="container">
      <a href="index.php" class="navbar-brand d-flex align-items-center">
        <strong>Vatansever Bisiklet</strong>
      </a>
      <!-- Sepet kısmı ikinci dönem yapılacak o yüzden butonunu kapattım
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <img src="img/shopping-cart--v1.png" width="32px">
      </button>
      -->
      <!--
    </div>
  </div>
</header>
-->
<header class="p-3 mb-5 border-bottom fixed-top bg-light">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
          <img src="logo.svg" height="40px"></img>
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

        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://st3.depositphotos.com/6672868/13701/v/600/depositphotos_137014128-stock-illustration-user-profile-icon.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
          </a>
          <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="#">Siparişlerim</a></li>
            <li><a class="dropdown-item" href="#">Bilgilerim</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Çıkış Yap</a></li>
          </ul>
        </div>
        <a href="#" type="button" class="link-dark position-relative ms-2 p-0">
        <i style="font-size: x-large;" class="bi bi-cart2"></i>
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
        2
        <span class="visually-hidden">unread messages</span>
        </span>
        </a>
      </div>
    </div>
  </header>