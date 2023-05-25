<?php
include("baglan.php");
session_start();
if (!isset($_SESSION["logged-in"])) {
  header("Location:sign-in");
}
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.111.3">
    <title>Sepetiniz</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">

    

    

<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

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

    
  </head>
  <body class="bg-body-tertiary">
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

    

    
<div class="container" style="max-width: 960px;">
  <main>
    <div class="py-5 text-center">
      <a href="index.php">
        <img class="d-block mx-auto mb-4" src="img/logo.svg" alt="" width="128" height="128">
      </a>
    </div>

    <div class="row g-5 mb-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-success">Sepetiniz</span>
          <span id="sepet-miktar-badge" class="badge bg-success rounded-pill">0</span>
        </h4>
        <ul class="list-group mb-3">
          <div id="sepet-body-checkout">
          <!--
          <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
            <div class="text-success">
              <h6 class="my-0">Promo code</h6>
              <small>EXAMPLECODE</small>
            </div>
            <span class="text-success">−$5</span>
          </li>
          -->
          </div>
          <li class="list-group-item d-flex justify-content-between">
            <span>Ara Toplam (USD)</span>
            <strong id="sepet-toplam">0$</strong>
          </li>
        </ul>
        
        <div class="card p-2" style="border: 0;">
          <button type="submit" class="btn btn-success" onclick="document.getElementById('form_button').click()">Satın Al</button>
        </div>
        
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Fatura Adresi</h4>
        <form id="checkoutCart" onsubmit="checkoutCart()" class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Adınız</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Lütfen adınızı giriniz.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Soyadınız</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Lütfen soyadınızı giriniz.
              </div>
            </div>
            <!--
              probably will make it hidden input
            <div class="col-12">
              <label for="username" class="form-label">Username</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
    -->
                <input type="hidden" class="form-control" id="username" placeholder="Username" required>
                <!--
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">E-posta <span class="text-body-secondary">(Optional)</span></label>
    --><input type="hidden" class="form-control" id="email" placeholder="you@example.com"><!--
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>
            -->
            <div class="col-12">
              <label for="address" class="form-label">Adres</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Hilal Sk" required>
              <div class="invalid-feedback">
                Lütfen adresinizi giriniz.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Adres 2 <span class="text-body-secondary">(İsteğe bağlı)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Apartman ve kapı numarası">
            </div>

            <div class="col-md-5">
              <label for="country" class="form-label">Ülke</label>
              <select class="form-select" id="country" required>
                <option value="">Seçiniz...</option>
                <option>Türkiye</option>
              </select>
              <div class="invalid-feedback">
                Lütfen doğru bir ülke seçiniz.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">Şehir</label>
              <select class="form-select" id="state" required>
                <option value="">Seçiniz...</option>
                <option>Kocaeli</option>
              </select>
              <div class="invalid-feedback">
                Lütfen doğru bir şehir seçiniz.
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Posta Kodu</label>
              <input type="text" class="form-control" id="zip" placeholder="" required>
              <div class="invalid-feedback">
                Posta kodu gereklidir.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <h4 class="mb-3">Ödeme Yöntemi</h4>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Kart Sahibi</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required>
              <small class="text-body-secondary">Kart üzerinde yazdığı gibi isim soyisim</small>
              <div class="invalid-feedback">
                Kart üzerindeki isim gereklidir.
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Kredi Kartı Numarası</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required>
              <div class="invalid-feedback">
                Kredi kartı numarası gereklidir.
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Son Kullanma</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="04/23" required>
              <div class="invalid-feedback">
                Son kullanma tarihi gereklidir.
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
              <div class="invalid-feedback">
                Güvenlik kodu gereklidir.
              </div>
            </div>
          </div>
          <button id="form_button" class="w-100 btn btn-primary btn-lg" type="submit" style="display: none;">Satın Al</button>
        </form>
      </div>
    </div>
  </main>

</div>


    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.6.3.js"></script>
    <script src="js/checkout.js"></script>
    <script src="js/functions.js"></script>

  </body>
</html>
