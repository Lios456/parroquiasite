<!DOCTYPE html>
<html lang="es">
<head>
  <title>Parroquia Eclesiástica "Santísima Trinidad" La Laguna</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="templatesjungle">
  <meta name="keywords" content="website template">
  <meta name="description" content="website template">

  <!--Bootstrap ================================================== -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

  <!--vendor css ================================================== -->
  <link rel="stylesheet" type="text/css" href="css/vendor.css">


  <!--Link Swiper's CSS ================================================== -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <!-- Style Sheet ================================================== -->
  <link rel="stylesheet" type="text/css" href="style.css">

  <!-- Google Fonts ================================================== -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- SUMMERNOTE ============================================== -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>


</head>

<header id="header">
    <nav class="header-top">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center py-3">
          <a class="navbar-brand" href="index.html">
            <img src="images/main-logo.png" class="logo img-fluid">
          </a>
          <ul class="info d-flex flex-wrap justify-content-end align-items-center list-unstyled m-0">
            <li class="phone text-black fw-medium text-capitalize d-flex align-items-center ms-4">
              <svg class="text-primary me-1" width="20" height="20">
                <use xlink:href="#phone"></use>
              </svg> Teléfono:
            </li>
            <li class="time text-black fw-medium text-capitalize d-flex align-items-center ms-4">
              <svg class="text-primary me-1" width="20" height="20">
                <use xlink:href="#clock"></use>
              </svg> 09:00-11:00 y 15:00-17:00 de Lunes a Viernes
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <hr class="m-0">
    <nav id="primary-header" class="navbar navbar-expand-lg py-3">
      <div class="container justify-content-end">
        <button class="navbar-toggler d-flex d-lg-none justify-content-end border-0 shadow-none p-0" type="button"
          data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false">
          <svg class="navbar-icon" width="60" height="60">
            <use xlink:href="#navbar-icon"></use>
          </svg>
        </button>
        <div class="header-bottom offcanvas offcanvas-end" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel">
          <div class="offcanvas-header px-4 mt-3 mb-1">
            <button type="button" class="btn-close btn-close-black shadow-none" data-bs-dismiss="offcanvas"
              aria-label="Close" data-bs-target="#bdNavbar"></button>
          </div>
          <div class="offcanvas-body align-items-center justify-content-center">
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item px-5 py-1 py-lg-0">
                <a href="#" class="btn btn-primary btn-slide hover-slide-right" style="width:100%;font-size:12px">
                  <span>Cambio de Fecha Celebración Religiosa</span>
                </a>
              </li>
              <li class="nav-item px-3 py-1 py-lg-0">
                <a class="nav-link active p-0" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item px-3 py-1 py-lg-0 dropdown">
                <a class="nav-link p-0 dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                  aria-expanded="false">Celebraciones <svg width="20" height="20" style="vertical-align: sub;">
                    <use xlink:href="#arrow-down"></use>
                  </svg></a>
                <ul class="dropdown-menu dropdown-menu-end animate slide mt-3 border-0 shadow">
                  <li><a href="index.html" class="dropdown-item">Santísima Cruz </a>
                  </li>
                  <li><a href="index.html" class="dropdown-item">Santísima Trinidad </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item px-3 py-1 py-lg-0">
                <a class="nav-link p-0" href="about.php">Sobre Nosotros</a>
              </li>
              <li class="nav-item px-3 py-1 py-lg-0">
                <a class="nav-link p-0" href="noticias.php">Noticias</a>
              </li>
              <li class="nav-item px-3 py-1 py-lg-0">
                <a class="nav-link p-0" href="catequesis.php">Catequesis</a>
              </li>
              <li class="nav-item px-3 py-1 py-lg-0">
                <a class="nav-link p-0" href="contacto.php">Contacto</a>
              </li>
              <li class="nav-item search-dropdown py-3 py-lg-0 ms-3 ms-lg-5 dropdown">
                <a class="nav-link p-0 search dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                  aria-expanded="false">
                  <svg class="search" width="24" height="24">
                    <use xlink:href="#search"></use>
                  </svg>
                </a>
                <ul class="dropdown-menu dropdown-menu-end animate slide mt-3 border-0 p-3 shadow">
                  <li class="position-relative d-flex align-items-center p-0">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-primary position-absolute end-0" type="submit">
                      <svg class="search" width="24" height="24">
                        <use xlink:href="#search"></use>
                      </svg>
                    </button>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>
