<?php
require_once __DIR__ . '/../routes.php';
?>
<footer id="footer">
  <script src="<?php echo BASE_URL?>/Views/js/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL?>/Views/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL?>/Views/js/plugins.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script type="text/javascript" src="<?php echo BASE_URL?>/Views/js/script.js"></script>
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

  <div class="container padding-small">
      <div class="row flex-wrap justify-content-between">
        <div class="col-lg-3 col-md-6 pb-3">
          <div class="footer-menu">
            <a class="navbar-brand" href="index.html">
              <img src="<?php echo BASE_URL?>/Views/images/main-logo.png" class="logo img-fluid">
            </a>
            <ul class="menu-list d-flex flex-column list-unstyled mt-3">
              <li class="fw-medium text-capitalize d-flex align-items-center">
                <svg class="text-primary me-1" width="16" height="16">
                  <use xlink:href="#check-circle"></use>
                </svg><a href="#"> Home</a>
              </li>

            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 pb-3">
          <div class="footer-menu">
            <h5 class=" widget-title py-2 mt-3 fw-semibold">Misas</h5>
            <ul class="menu-list d-flex flex-column list-unstyled">
              <li class="fw-medium text-capitalize d-flex align-items-center">
                <svg class="text-primary me-1" width="16" height="16">
                  <use xlink:href="#check-circle"></use>
                </svg><a href="#"> Jueves 18:00 </a>
              </li>
              <li class="fw-medium text-capitalize d-flex align-items-center">
                <svg class="text-primary me-1" width="16" height="16">
                  <use xlink:href="#check-circle"></use>
                </svg><a href="#"> Sábado 18:00 </a>
              </li>
              <li class="fw-medium text-capitalize d-flex align-items-center">
                <svg class="text-primary me-1" width="16" height="16">
                  <use xlink:href="#check-circle"></use>
                </svg><a href="#"> Domingo 8:00 </a>
              </li>
              <li class="fw-medium text-capitalize d-flex align-items-center">
                <svg class="text-primary me-1" width="16" height="16">
                  <use xlink:href="#check-circle"></use>
                </svg><a href="#"> Domingo 10:00 </a>
              </li>
              <li class="fw-medium text-capitalize d-flex align-items-center">
                <svg class="text-primary me-1" width="16" height="16">
                  <use xlink:href="#check-circle"></use>
                </svg><a href="#"> Domingo 18:00 </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 pb-3">
          <div class="footer-menu">
            <h5 class=" widget-title py-2 mt-3 fw-semibold">Other Services</h5>
            <ul class="menu-list d-flex flex-column list-unstyled">
              <li class="fw-medium text-capitalize d-flex align-items-center">
                <svg class="text-primary me-1" width="16" height="16">
                  <use xlink:href="#check-circle"></use>
                </svg><a href="#"> Ductwork Inspection and Cleaning </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 pb-3">
          <div class="footer-menu">
            <h5 class=" widget-title py-2 mt-3 fw-semibold">Contáctanos</h5>
            <ul class="menu-list d-flex flex-column list-unstyled">
              <li class="fw-medium text-capitalize d-flex align-items-center">
                <svg class="text-primary me-1" width="18" height="18">
                  <use xlink:href="#location"></use>
                </svg><a href="#"> Latacunga, Cotopaxi </a>
              </li>
              <li class="fw-medium text-capitalize d-flex align-items-center">
                <svg class="text-primary me-1" width="18" height="18">
                  <use xlink:href="#email"></use>
                </svg><a href="#"> pendiente </a>
              </li>
              <li class="fw-medium text-capitalize d-flex align-items-center">
                <svg class="text-primary me-1" width="18" height="18">
                  <use xlink:href="#phone"></use>
                </svg><a href="#"> 888 333 9999 </a>
              </li>
              <li class="fw-medium text-capitalize d-flex align-items-center">
                <svg class="text-primary me-1" width="18" height="18">
                  <use xlink:href="#clock"></use>
                </svg><a href="#"> 09:00-11:00 y 15:00-17:00 de Lunes a Viernes</a>
              </li>
            </ul>
          </div>
          <div class="footer-menu">
            <h5 class=" widget-title py-2 mt-4 fw-semibold">Social Link</h5>
            <ul class="social-links d-flex flex-wrap list-unstyled">
              <li class="social me-3">
                <a href="https://www.facebook.com/parroquiasantisimatrinidad.lalagunalatacunga">
                  <svg class=" me-1" width="24" height="24">
                    <use xlink:href="#facebook"></use>
                  </svg>
                </a>
              </li>
              <li class="social me-3">
                <a href="#">
                  <svg class=" me-1" width="24" height="24">
                    <use xlink:href="#twitter"></use>
                  </svg>
                </a>
              </li>
              <li class="social me-3">
                <a href="#">
                  <svg class=" me-1" width="24" height="24">
                    <use xlink:href="#linkedin"></use>
                  </svg>
                </a>
              </li>
              <li class="social me-3">
                <a href="#">
                  <svg class=" me-1" width="24" height="24">
                    <use xlink:href="#instagram"></use>
                  </svg>
                </a>
              </li>
              <li class="social me-3">
                <a href="#">
                  <svg class=" me-1" width="24" height="24">
                    <use xlink:href="#youtube"></use>
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <hr class="m-0">
    <div class="container">
      <div class="footer-bottom d-md-flex justify-content-between py-4">
        <p class=" mb-0">© 2024 UTC</p>
      </div>
    </div>
</footer>

</html>