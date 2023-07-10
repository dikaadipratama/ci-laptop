<?= $this->include('assets/header.php') ?>

<!-- Page wrapper-->
<main class="page-wrapper">
  <div class="dark-mode">
    <?= $this->include('assets/nav.php') ?>
  </div>
  <!-- Page content-->

  <!-- Hero-->
  <section class="bg-dark dark-mode position-relative min-vh-100 overflow-hidden pt-5">
    <svg class="position-absolute top-0" width="262" height="160" viewBox="0 0 262 160" fill="none" xmlns="http://www.w3.org/2000/svg" style="left: 6%">
      <ellipse cx="131" cy="30.5" rx="131" ry="129.5" fill="white" fill-opacity=".03"></ellipse>
    </svg>
    <div class="container position-relative zindex-5 text-center pt-5 mt-lg-4 mt-xl-5">
      <h1 class="display-1 pt-4 mt-sm-3">
        <span class="text-white fw-normal">Welcome to </span>
        <span class="d-inline-flex align-items-center">
          <span class="text-white">Lapt</span>
          <img class="flex-shrink-0 mt-2" src="<?= base_url(); ?>/templates/assets/img/landing/intro/avatar.png" width="51" alt="Image" />
          <span class="text-white">p</span>
          <img class="flex-shrink-0" src="<?= base_url(); ?>/templates/assets/img/logoUtama2.png" width="76" alt="Image" />
          <span class="text-white">niverse!</span>
        </span>
      </h1>
      <p class="fs-xl mb-5">
        Semua barang yang ada disini adalah barang resmi dari tiap-tiap
        produsen.
      </p>
      <a class="scroll-down-btn" href="#landings" data-scroll data-scroll-offset="20">
        <div class="mouse"></div>
        <p>Buy a Laptop get Mouse</p>
      </a>
    </div>
    <div class="d-none d-lg-block" style="margin-top: -80px"></div>
    <div class="d-none d-sm-block d-lg-none" style="margin-top: -40px"></div>
    <div class="parallax mx-auto mb-n5" style="max-width: 1606px">
      <div class="parallax-layer" data-depth="-0.1">
        <img src="<?= base_url(); ?>/templates/assets/img/landing/intro/hero/01.png" alt="Background shapes" />
      </div>
      <div class="parallax-layer zindex-2" data-depth="0.12">
        <img src="<?= base_url(); ?>/templates/assets/img/landing/intro/hero/02.png" alt="Foreground shape" />
      </div>
      <div class="parallax-layer zindex-2" data-depth="0.35">
        <img src="<?= base_url(); ?>/templates/assets/img/landing/intro/hero/03.png" alt="Foreground shape" />
      </div>
      <div class="parallax-layer zindex-2" data-depth="0.23">
        <img src="<?= base_url(); ?>/templates/assets/img/landing/intro/hero/04.png" alt="Foreground shape" />
      </div>
    </div>
  </section>

  <!-- Landings-->
  <section class="bg-gray py-2 py-lg-3 py-xl-4 py-xxl-5" id="landings">
    <div class="container py-5 mt-1 mb-2 mt-sm-2 mb-sm-3 mt-md-3 mb-md-4 my-lg-4 my-xl-5">
      <h2 class="display-5 text-center pt-xxl-2">Daftar Laptop</h2>
      <p class="fs-lg text-center pb-3 pb-lg-0 mb-lg-5">
        Berikut adalah daftar dari beberapa merek laptop yang ada.
      </p>
      <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 gy-5 pb-xl-3">
        <!-- Laptop -->
        <?= $this->include('assets/laptop.php') ?>
      </div>
      <div class="">
        <a class="btn btn-primary w-100 mb-1" href="<?= base_url('Produk/'); ?>">
          Lihat Semua Produk Kami
        </a>
      </div>
    </div>
  </section>

  <!-- KONTAK -->
  <section class="container" id="kontak">
    <div class="bg-dark position-relative rounded-5 overflow-hidden px-4 pt-1 pb-2 py-sm-4 py-lg-5">
      <div class="d-none d-dark-mode-block position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(255, 255, 255, 0.02)"></div>
      <div class="position-absolute top-0 end-0 pe-5 zindex-2">
        <svg class="me-5" width="514" height="254" viewBox="0 0 514 254" fill="white" fill-opacity=".03" xmlns="http://www.w3.org/2000/svg">
          <ellipse cx="257" cy="0.5" rx="257" ry="253.5"></ellipse>
        </svg>
      </div>

      <div class="dark-mode position-relative zindex-3 text-center py-5 my-xl-3 mx-auto" style="max-width: 565px">
        <h2 class="display-5">Kontak</h2>
        <p class="fs-lg pb-3 mb-3 mb-lg-4">
          Jika ada pertanyaan, silahkan tanyakan sesuatu di sini.
        </p>
        <form class="subscription-form validate mx-auto" action="https://studio.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=29ca296126" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate style="max-width: 500px">
          <div class="input-group">
            <!-- EMAIL -->
            <span class="input-group-text"><i class="bi-envelope"></i></span>
            <input class="form-control" type="email" name="email" placeholder="Enter your email" required id="subscr-email" />
          </div>
          <div class="input-group mt-3">
            <!-- SUBJEK -->
            <span class="input-group-text"><i class="bi-pencil"></i></span>
            <input class="form-control" type="subjek" name="subjek" placeholder="Enter your subjek" required />
          </div>
          <div class="input-group mt-3">
            <!-- MESSAGE -->
            <span class="input-group-text"><i class="bi-chat"></i></span>
            <input class="form-control" type="message" name="message" placeholder="Enter your message" required />
          </div>
          <button class="btn btn-primary mt-3" type="submit" name="subscribe">
            Kirim*
          </button>

          <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px" aria-hidden="true">
            <input class="subscription-form-antispam" type="text" name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1" />
          </div>
          <div class="subscription-status mx-auto"></div>
        </form>
      </div>
    </div>
  </section>
</main>

<!-- FOOTER -->
<footer class="footer py-4">
  <div class="container text-center py-3">
    <span class="text-muted">&copy; All rights reserved. Made with
      <span class="text-danger">❤</span> by </span><a class="nav-link d-inline fw-normal p-0" href="#" target="_blank" rel="noopener">Dika Adi Pratama</a>
  </div>
</footer>
<!-- Back to top button--><a class="btn-scroll-top" href="#top" data-scroll>
  <svg viewBox="0 0 40 40" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
    <circle cx="20" cy="20" r="19" fill="none" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"></circle>
  </svg><i class="bi-arrow-up"></i></a>

<!-- Main JS -->
<script src="<?= base_url(); ?>/templates/assets/js/main.js"></script>

<!-- Vendor scripts: js libraries and plugins-->
<script src="<?= base_url(); ?>/templates/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>/templates/assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<script src="<?= base_url(); ?>/templates/assets/vendor/parallax-js/dist/parallax.min.js"></script>
<script src="<?= base_url(); ?>/templates/assets/vendor/aos/dist/aos.js"></script>
<script src="<?= base_url(); ?>/templates/assets/vendor/@lottifiles/lottie-player/dist/lottie-player.js"></script>
<script src="<?= base_url(); ?>/templates/assets/vendor/img-comparison-slider/dist/index.js"></script>

<!-- Main theme script-->
<script src="<?= base_url(); ?>/templates/assets/js/theme.min.js"></script>
<script src="<?= base_url(); ?>/templates/assets/js/customizer.js"></script>
</body>

</html>