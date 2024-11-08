<?php
  include 'Views/head.php';;
?>


  <section id="billboard">
    <div class="row align-items-center g-0z" style="background-color: #183f8a">
      <div class="col-lg-6" >
        <div class="m-4 p-4 m-lg-5 p-lg-5">
          <h3 class="fw-bold h3 text-white">Diócesis de Latacunga</h3>
          <h2 class="display-4 fw-bold text-white my-4">Parroquia Eclesiástica "Santísima Trinidad" La Laguna</h2>
        </div>
      </div>
      <div class="col-lg-6">
        <img src="Views/images/iglesia/17.jpg" alt="img" class="img-fluid">
      </div>
    </div>
  </section>
  <hr>
<!-- SECCIÓN DE PÁRROCOS -->
  <section id="brands" class="padding-small">
    <div class="container">
      <h6 class="fst-italic text-capitalize mb-4">  Párrocos
      </h6>
      <div class="row">
        <div class="col my-4">
          <a href="">Mons. Lorenzo Voltonili</a>
        </div>
        <div class="col my-4">
          <a href="">Mons. Victoriano Naranjo</a>
        </div>
        <div class="col my-4">
          <a href="">✚ P. Emiliano Jácome ✚</a>
        </div>
        <div class="col my-4">
          <a href="">P. José Luis Tapia</a>
        </div>
        <div class="col my-4">
          <a href="">P. Cristian Santana</a>
        </div>
      </div>
    </div>
    <div class="container">
      <h6 class="fst-italic text-capitalize mb-4">  Vicario
      </h6>
      <div class="row">
        <div class="col my-4">
          <a href="">P. Luis Gutiérrez</a>
        </div>
      </div>
    </div>
  </section>
  <hr>

<!-- SECCIÓN DE NOTICIAS -->
  <section id="blog">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <div>
          <h6><span class="text">|</span>Noticias</h6>
          <h3 class="display-6 fw-semibold">Recientes</h3>
        </div>
        <div>
          <a href="Views/noticias.php" class="btn btn-primary btn-slide hover-slide-right">
            <span>Ver Todas</span>
          </a>
        </div>
      </div>
      <div class="row mt-5">
        <?php
          include 'Models/noticia.php';
          $not = new Noticia() ;
          $not->listar_recientes() ;
        ?>
      </div>
    </div>
  </section>
<hr>
<!-- SECCIÓN DE CATEQUESIS -->
  <section id="about-us">
    <div class="container">
      <div class="row g-md-5 align-items-center">
        <div class="col-lg-5">
          <div class="imageblock position-relative">
          <video class="img-fluid" src="videos/video1.mp4" autoplay loop muted>
          </video>

          <div class="video-player position-absolute top-50 start-50 translate-middle">
              <a type="button" data-bs-toggle="modal" data-bs-target="#myModal" class="play-btn position-relative">
                <svg class="play-icon text-primary my-3" width="80" height="80">
                  <use xlink:href="#play-button"></use>
                </svg>
              </a>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="videoModalLabel">Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <video class="img-fluid" src="videos/video1.mp4" autoplay loop muted controls></video>
                  </div>
                </div>
              </div>
            </div>

            </a>
          </div>
        </div>
        <div class="col-lg-7 mt-5">
          <h6><span class="text-primary">|</span>Sobre Nosotros</h6>
          <h3 class="display-6 fw-semibold mb-4">Ven y descubre el camino de la salvacón y de la fe</h3>
          <p>La Parroquia Eclesiástica "Santísima Trinidad" La Laguna es una comunidad vibrante y acogedora, dedicada a la fe cristiana y al servicio de los demás. Nuestra misión es ser un lugar de encuentro y apoyo espiritual para todos aquellos que buscan acercarse a Dios y fortalecer su relación con Él.           
          </p>
          <p class="fw-semibold m-0">Nuestra misión</p>
          <p>Aspiramos a ser una comunidad vibrante y compasiva que refleje el amor y la misericordia de Dios. Nuestra visión es:
          </p>
          <p><strong>- Crecer en Fe</strong></p>
          <p><strong>- Servir a la Comunidad</strong></p>
          <p><strong>- Promover la Unidad</strong></p>

          <a href="index.php" class="btn btn-primary btn-slide hover-slide-right mt-4">
            <span>Más sobre nosotros</span>
          </a>
        </div>
      </div>
    </div>
  </section>

<!-- CONTACTO -->

  <!--
  <section id="testimonial" class="padding-small">
    <div class="container">
      <h6><span class="text-primary">|</span>Testimonials</h6>
      <h3 class="display-6 fw-semibold mb-5">Our happy customers</h3>
      <div class="swiper testimonial-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="review-item">
              <div class="review">
                <blockquote class="mb-0">
                  <p class="mb-0">“We provide students with timely and tailored support & services. We offer culturally
                    sensitive and engaged teach learning and assessment needs.”</p>
                </blockquote>
              </div>
              <div class="author-detail mt-4 d-flex align-items-center">
                <div class="author-text">
                  <h5 class="name mb-0">James Rodrigo</h6>
                    <div class="review-star d-flex mt-2">
                      <svg class="star me-1 text-warning" width="16" height="16">
                        <use xlink:href="#star" />
                      </svg>
                      <svg class="star me-1 text-warning" width="16" height="16">
                        <use xlink:href="#star" />
                      </svg>
                      <svg class="star me-1 text-warning" width="16" height="16">
                        <use xlink:href="#star" />
                      </svg>
                      <svg class="star me-1 text-warning" width="16" height="16">
                        <use xlink:href="#star" />
                      </svg>
                      <svg class="star me-1 text-warning" width="16" height="16">
                        <use xlink:href="#star" />
                      </svg>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="review-item">
              <div class="review">
                <blockquote class="mb-0">
                  <p class="mb-0">“We provide students with timely and tailored support & services. We offer culturally
                    sensitive and engaged teach learning and assessment needs.”</p>
                </blockquote>
              </div>
              <div class="author-detail mt-4 d-flex align-items-center">
                <div class="author-text">
                  <h5 class="name mb-0">Kelly Garcia</h6>
                    <div class="review-star d-flex mt-2">
                      <svg class="star me-1 text-warning" width="16" height="16">
                        <use xlink:href="#star" />
                      </svg>
                      <svg class="star me-1 text-warning" width="16" height="16">
                        <use xlink:href="#star" />
                      </svg>
                      <svg class="star me-1 text-warning" width="16" height="16">
                        <use xlink:href="#star" />
                      </svg>
                      <svg class="star me-1 text-warning" width="16" height="16">
                        <use xlink:href="#star" />
                      </svg>
                      <svg class="star me-1 text-warning" width="16" height="16">
                        <use xlink:href="#star" />
                      </svg>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="review-item">
              <div class="review">
                <blockquote class="mb-0">
                  <p class="mb-0">“We provide students with timely and tailored support & services. We offer culturally
                    sensitive and engaged teach learning and assessment needs.”</p>
                </blockquote>
              </div>
              <div class="author-detail mt-4 d-flex align-items-center">
                <div class="author-text">
                  <h5 class="name mb-0">Karma Samuel</h6>
                    <div class="review-star d-flex mt-2">
                      <svg class="star me-1 text-warning" width="16" height="16">
                        <use xlink:href="#star" />
                      </svg>
                      <svg class="star me-1 text-warning" width="16" height="16">
                        <use xlink:href="#star" />
                      </svg>
                      <svg class="star me-1 text-warning" width="16" height="16">
                        <use xlink:href="#star" />
                      </svg>
                      <svg class="star me-1 text-warning" width="16" height="16">
                        <use xlink:href="#star" />
                      </svg>
                      <svg class="star me-1 text-warning" width="16" height="16">
                        <use xlink:href="#star" />
                      </svg>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="review-item">
              <div class="review">
                <blockquote class="mb-0">
                  <p class="mb-0">“We provide students with timely and tailored support & services. We offer culturally
                    sensitive and engaged teach learning and assessment needs.”</p>
                </blockquote>
              </div>
              <div class="author-detail mt-4 d-flex align-items-center">
                <div class="author-text">
                  <h5 class="name mb-0">James Rodrigo</h6>
                    <div class="review-star d-flex mt-2">
                      <svg class="star me-1 text-warning" width="16" height="16">
                        <use xlink:href="#star" />
                      </svg>
                      <svg class="star me-1 text-warning" width="16" height="16">
                        <use xlink:href="#star" />
                      </svg>
                      <svg class="star me-1 text-warning" width="16" height="16">
                        <use xlink:href="#star" />
                      </svg>
                      <svg class="star me-1 text-warning" width="16" height="16">
                        <use xlink:href="#star" />
                      </svg>
                      <svg class="star me-1 text-warning" width="16" height="16">
                        <use xlink:href="#star" />
                      </svg>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="review-item">
              <div class="review">
                <blockquote class="mb-0">
                  <p class="mb-0">“We provide students with timely and tailored support & services. We offer culturally
                    sensitive and engaged teach learning and assessment needs.”</p>
                </blockquote>
              </div>
              <div class="author-detail mt-4 d-flex align-items-center">
                <div class="author-text">
                  <h5 class="name mb-0">James Rodrigo</h6>
                    <div class="review-star d-flex mt-2">
                      <svg class="star me-1 text-warning" width="16" height="16">
                        <use xlink:href="#star" />
                      </svg>
                      <svg class="star me-1 text-warning" width="16" height="16">
                        <use xlink:href="#star" />
                      </svg>
                      <svg class="star me-1 text-warning" width="16" height="16">
                        <use xlink:href="#star" />
                      </svg>
                      <svg class="star me-1 text-warning" width="16" height="16">
                        <use xlink:href="#star" />
                      </svg>
                      <svg class="star me-1 text-warning" width="16" height="16">
                        <use xlink:href="#star" />
                      </svg>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination position-relative pt-5"></div>
      </div>
    </div>
  </section>

  <section id="services">
    <div class="service-block position-relative bg-secondary">
      <div class="jarallax service-bg"
        style="background-image: url(images/services2.jpg); background-size: cover; background-repeat: no-repeat;  background-position: center; ">
      </div>
      <div class="container service-content position-absolute top-50 start-50 translate-middle">
        <div class="row align-items-center">
          <div class="col-lg-9">
            <h3 class="display-6 fw-semibold text-white mb-4">Repairing & Servicing</h3>
            <p class="text-white">Our skilled technicians can diagnose and repair any HVAC-related issues swiftly,
              restoring comfort to your space. Regular maintenance is essential to ensure.</p>
          </div>
          <div class="col-lg-3 text-lg-end">
            <a href="index.html" class="btn btn-outline-light service-btn">Get It Fixed</a>
          </div>
        </div>
      </div>
    </div>
    <div class="service-block position-relative bg-secondary">
      <div class="jarallax service-bg"
        style="background-image: url(images/services1.jpg); background-size: cover; background-repeat: no-repeat;  background-position: center; ">
      </div>
      <div class="container service-content position-absolute top-50 start-50 translate-middle">
        <div class="row align-items-center">
          <div class="col-lg-9">
            <h3 class="display-6 fw-semibold text-white mb-4">Air conditioning Cleaning</h3>
            <p class="text-white">Breathe easier with our indoor air quality assessments and solutions, ensuring your
              space is free from pollutants and allergens.</p>
          </div>
          <div class="col-lg-3 text-lg-end">
            <a href="index.html" class="btn btn-outline-light service-btn">Get It Cleaned</a>
          </div>
        </div>
      </div>
    </div>
    <div class="service-block position-relative bg-secondary">
      <div class="jarallax service-bg"
        style="background-image: url(images/services3.jpg); background-size: cover; background-repeat: no-repeat;  background-position: center; ">
      </div>
      <div class="container service-content position-absolute top-50 start-50 translate-middle">
        <div class="row align-items-center">
          <div class="col-lg-9">
            <h3 class="display-6 fw-semibold text-white mb-4">Installation Service</h3>
            <p class="text-white">We specialize in installing state-of-the-art HVAC systems that guarantee optimal
              performance and energy efficiency.</p>
          </div>
          <div class="col-lg-3 text-lg-end">
            <a href="index.html" class="btn btn-outline-light service-btn">Book Ac Install</a>
          </div>
        </div>
      </div>
    </div>
    <div class="service-block position-relative bg-secondary">
      <div class="jarallax service-bg"
        style="background-image: url(images/services4.jpg); background-size: cover; background-repeat: no-repeat;  background-position: center; ">
      </div>
      <div class="container service-content position-absolute top-50 start-50 translate-middle">
        <div class="row align-items-center">
          <div class="col-lg-9">
            <h3 class="display-6 fw-semibold text-white mb-4">Maintainance Service</h3>
            <p class="text-white">Regular maintenance is essential to ensure your HVAC system operates efficiently and
              lasts longer. Our maintenance plans are tailored to keep your equipment.</p>
          </div>
          <div class="col-lg-3 text-lg-end">
            <a href="index.html" class="btn btn-outline-light service-btn">Get Maintained</a>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section id="project">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <div>
          <h6><span class="text-primary">|</span>Our Work</h6>
          <h3 class="display-6 fw-semibold">Our Latest Projects</h3>
        </div>
        <div>
          <a href="index.html" class="btn btn-primary btn-slide hover-slide-right">
            <span>View all Project</span>
          </a>
        </div>
      </div>
    </div>
    <div class="swiper project-swiper mt-5">
      <div class="swiper-wrapper">
        <div class="swiper-slide swiper-width">
          <div class="project-content bg-black">
            <img class="portfolio-img img-fluid" src="images/project4.jpg" alt="img">
            <div class="portfolio-description position-absolute top-50 start-50 translate-middle">
              <h4 class="text-white">AC Cleaning</h4>
              <a href="index.html" class="text-white text-decoration-underline">Browse More</a>
            </div>
          </div>
        </div>
        <div class="swiper-slide swiper-width">
          <div class="project-content bg-black">
            <img class="portfolio-img img-fluid" src="images/project3.jpg" alt="img">
            <div class="portfolio-description position-absolute top-50 start-50 translate-middle">
              <h4 class="text-white">AC Maintainance</h4>
              <a href="index.html" class="text-white text-decoration-underline">Browse More</a>
            </div>
          </div>
        </div>
        <div class="swiper-slide swiper-width">
          <div class="project-content bg-black">
            <img class="portfolio-img img-fluid" src="images/project2.jpg" alt="img">
            <div class="portfolio-description position-absolute top-50 start-50 translate-middle">
              <h4 class="text-white">AC Repairing</h4>
              <a href="index.html" class="text-white text-decoration-underline">Browse More</a>
            </div>
          </div>
        </div>
        <div class="swiper-slide swiper-width">
          <div class="project-content bg-black">
            <img class="portfolio-img img-fluid" src="images/project1.jpg" alt="img">
            <div class="portfolio-description position-absolute top-50 start-50 translate-middle">
              <h4 class="text-white">AC Installation</h4>
              <a href="index.html" class="text-white text-decoration-underline">Browse More</a>
            </div>
          </div>
        </div>
        <div class="swiper-slide swiper-width">
          <div class="project-content bg-black">
            <img class="portfolio-img img-fluid" src="images/project4.jpg" alt="img">
            <div class="portfolio-description position-absolute top-50 start-50 translate-middle">
              <h4 class="text-white">AC Cleaning</h4>
              <a href="index.html" class="text-white text-decoration-underline">Browse More</a>
            </div>
          </div>
        </div>
        <div class="swiper-slide swiper-width">
          <div class="project-content bg-black">
            <img class="portfolio-img img-fluid" src="images/project3.jpg" alt="img">
            <div class="portfolio-description position-absolute top-50 start-50 translate-middle">
              <h4 class="text-white">AC Maintainance</h4>
              <a href="index.html" class="text-white text-decoration-underline">Browse More</a>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination position-relative pt-5"></div>
    </div>
  </section>

  <section id="faq" class="padding-small">
    <div class="container">
      <div class="row justify-content-center ">
        <div class="col-lg-10">
          <div class="text-center">
            <h6><span class="text-primary">|</span>FAQS</h6>
            <h3 class="display-6 fw-semibold mb-5">We’ve got answers</h3>
          </div>
          <div class="accordion mb-5" id="accordionExample">
            <div class="accordion-item">
              <h5 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">
                  <h5 class="my-2">Why is regular HVAC maintenance important?</h5>
                </button>
              </h5>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                <div class="accordion-body pt-0">
                  Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.
                  Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo
                  eget felis
                  facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                  pellentesque
                  felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer
                  ligula
                  vulputate sem tristique cursus.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h3 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <h5 class="my-2">What are the signs that my HVAC system needs repair?</h5>
                </button>
              </h3>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                <div class="accordion-body pt-0">
                  Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.
                  Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo
                  eget felis
                  facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                  pellentesque
                  felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer
                  ligula
                  vulputate sem tristique cursus.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h3 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <h5 class="my-2">How can I improve the energy efficiency of my HVAC system?</h5>
                </button>
              </h3>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                <div class="accordion-body pt-0">
                  Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.
                  Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo
                  eget felis
                  facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                  pellentesque
                  felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer
                  ligula
                  vulputate sem tristique cursus.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h3 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <h5 class="my-2">Can I install an HVAC system myself?</h5>
                </button>
              </h3>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour">
                <div class="accordion-body pt-0">
                  Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.
                  Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo
                  eget felis
                  facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                  pellentesque
                  felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer
                  ligula
                  vulputate sem tristique cursus.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h3 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  <h5 class="my-2">What is the average lifespan of an HVAC system?</h5>
                </button>
              </h3>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive">
                <div class="accordion-body pt-0">
                  Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.
                  Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo
                  eget felis
                  facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                  pellentesque
                  felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer
                  ligula
                  vulputate sem tristique cursus.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h3 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  <h5 class="my-2">How can I improve indoor air quality in my home?</h5>
                </button>
              </h3>
              <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix">
                <div class="accordion-body pt-0">
                  Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.
                  Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo
                  eget felis
                  facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim
                  pellentesque
                  felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer
                  ligula
                  vulputate sem tristique cursus.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="features" class="padding-small">
    <div class="container">
      <div class="row">
        <div class="text-center col-lg-3 col-md-6 mb-4 mb-lg-0">
          <svg class="text-primary me-1" width="42" height="42">
            <use xlink:href="#clock-square"></use>
          </svg>
          <h5 class="mt-3">Quick maintenance</h5>
          <p>Purus pulvinar feugiat orci dictumst ellentesque ut sem partu rient.</p>
        </div>
        <div class="text-center col-lg-3 col-md-6 mb-4 mb-lg-0">
          <svg class="text-primary me-1" width="42" height="42">
            <use xlink:href="#user-speak"></use>
          </svg>
          <h5 class="mt-3">Free Consultant</h5>
          <p>Purus pulvinar feugiat orci dictumst ellentesque ut sem partu rient.</p>
        </div>
        <div class="text-center col-lg-3 col-md-6 mb-4 mb-lg-0">
          <svg class="text-primary me-1" width="42" height="42">
            <use xlink:href="#tag-price"></use>
          </svg>
          <h5 class="mt-3">No Checking charge</h5>
          <p>Purus pulvinar feugiat orci dictumst ellentesque ut sem partu rient.</p>
        </div>
        <div class="text-center col-lg-3 col-md-6 mb-4 mb-lg-0">
          <svg class="text-primary me-1" width="42" height="42">
            <use xlink:href="#mask-happly"></use>
          </svg>
          <h5 class="mt-3">Friendly Service</h5>
          <p>Purus pulvinar feugiat orci dictumst ellentesque ut sem partu rient.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="cta"
    style="background-image: url(images/cta-bg.jpg); background-size: cover; background-repeat: no-repeat;  background-position: center">
    <div class="container padding-medium">
      <div class="row g-lg-5 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
          <div class="border-dotted rounded-4 p-5">
            <h2 class="display-4 fw-bold text-white">$30 Off</h2>
            <p class="fs-3 fw-semibold text-white text-capitalize">if you Mention our Website</p>
            <p class="text-white">RPurus pulvinar feugiat orci dictumst ellentesque ut sem partu rient. Purus pulvinar
              feugiat orci dictumst ellentesque ut sem partu rien.</p>
          </div>
        </div>
        <div class="col-lg-6 mb-5 mb-lg-0">
          <h6 class="text-white">Get started now</h6>
          <h2 class="display-4 fw-bold text-white">Best HVAC Services</h2>
          <p class="text-white">Eugiat orci dictumst ellentesque ut sempurus pulvinar partu rient pulvinar feugiat orci
            dictumst ellentesque ut sem partu rient.</p>
          <ul class="d-flex flex-wrap align-items-center list-unstyled m-0">
            <li class="phone text-white text-capitalize d-flex align-items-center me-4">
              <svg class="text-primary me-1" width="20" height="20">
                <use xlink:href="#phone"></use>
              </svg> call: 666 333 9999
            </li>
            <li class="time text-white text-capitalize d-flex align-items-center me-4">
              <svg class="text-primary me-1" width="20" height="20">
                <use xlink:href="#pen-new-round"></use>
              </svg> Get a free quote
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
-->
  <!-- Video Popup -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">

      <div class="modal-content">

        <div class="modal-body">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><svg class="bi" width="40"
              height="40">
              <use xlink:href="#close-sharp"></use>
            </svg></button>
          <div class="ratio ratio-16x9">
            <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
              allow="autoplay"></iframe>
          </div>
        </div>

      </div>

    </div>
  </div>


</body>

<?php include 'Views/footer.php' ?>

