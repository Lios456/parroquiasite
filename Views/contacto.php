<?php
include 'head.php';
?>
  <section id="quote" class="padding-small">
    <div class="container text-center">
      <h3 class="display-6 fw-semibold mb-4">Deja Aquí tu pregunta</h3>
      <form class="contact-form row mt-5">
        <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
          <input type="text" name="name" placeholder="Full Name*" class="form-control w-100 ps-3 py-2 rounded-0"
            required>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
          <input type="email" name="email" placeholder="Email*" class="form-control w-100 ps-3 py-2 rounded-0" required>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
          <input type="text" name="phone" placeholder="Phone*" class="form-control w-100 ps-3 py-2 rounded-0" required>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
          <input type="text" name="address" placeholder="Address*" class="form-control w-100 ps-3 py-2 rounded-0"
            required>
        </div>
        <div class="col-md-12 col-sm-12 mb-4">
          <textarea class="form-control w-100 ps-3 py-2 rounded-0" rows="6" type="text" name="message"
            placeholder="Message"></textarea>
        </div>
        <div class="col-12">
          <a href="index.php" class="btn btn-primary btn-slide hover-slide-right mt-4">
            <span>Enviar</span>
          </a>
        </div>
      </form>
    </div>
  </section>
<?php
include 'footer.php';
?>