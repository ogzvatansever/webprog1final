<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="icon" href="../img/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <title>Kayıt Ol</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
    </style>
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
    <link href="sign-in.css" rel="stylesheet">
</head>
<body class="text-center">
    <main class="form-signin w-100 m-auto">
<!--
    Email
    Password

    Name
    Surname
    
    Adress
    Adress 2
    Country
    City
    Zip
 -->
    <form method="post" action="signupisle.php">
        <a href="../index.php">
        <img class="mb-4" src="../img/logo.svg" alt="" height="180">
        </a>
        <h1 class="h3 mb-3 fw-normal">Kayıt Ol</h1>
        <div class="form-floating">
            <input type="email" class="form-control" id="yorumInputMail" name="mail" placeholder=" ">
            <label for="yorumInputMail">E-Posta</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="yorumInputPassword" name="password" placeholder=" ">
            <label for="yorumInputPassword">Şifre</label>
        </div>
        <div class="form-floating">
            <input type="form-control" class="form-control" id="yorumInputAdress" name="adress" placeholder=" ">
            <label for="yorumInputAdress">Adres 1</label>
        </div>
        <div class="form-floating">
            <input type="form-control" class="form-control" id="yorumInputAdress2" name="adress2" placeholder=" ">
            <label for="yorumInputAdress2">Adres 2</label>
        </div>
        <div class="form-floating">
            <input type="form-control" class="form-control" id="yorumInputCountry" name="country" placeholder=" ">
            <label for="yorumInputCountry">Ülke</label>
        </div>
        <div class="form-floating">
            <input type="form-control" class="form-control" id="yorumInputCity" name="city" placeholder=" ">
            <label for="yorumInputCity">Şehir</label>
        </div>
        <div class="form-floating mb-2">
            <input type="form-control" class="form-control" id="yorumInputZip" name="zip" placeholder=" ">
            <label for="yorumInputZip">Posta Kodu</label>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Kayıt Ol</button>
    </form>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="../js/sorgu.js"></script>
    </main>
</body>
</html>