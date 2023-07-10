<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Home | LaptopUniverse</title>
  <!-- SEO Meta Tags-->
  <meta name="description" content="Home | LaptopUniverse" />
  <meta name="keywords" content="bootstrap, business, corporate, coworking space, services, creative agency, dashboard, e-commerce, mobile app showcase, saas, multipurpose, product landing, shop, software, ui kit, web studio, landing, dark mode, html5, css3, javascript, gallery, slider, touch, creative" />
  <meta name="author" content="dikaadi" />
  <!-- Viewport-->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Favicon and Touch Icons-->
  <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url(); ?>/templates/assets/favicon/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url(); ?>/templates/assets/favicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url(); ?>/templates/assets/favicon/favicon-16x16.png" />
  <link rel="manifest" href="<?= base_url(); ?>/templates/assets/favicon/site.webmanifest" />
  <link rel="mask-icon" color="#6366f1" href="<?= base_url(); ?>/templates/assets/favicon/safari-pinned-tab.svg" />
  <meta name="msapplication-TileColor" content="#080032" />
  <meta name="msapplication-config" content="<?= base_url(); ?>/templates/assets/favicon/browserconfig.xml" />
  <meta name="theme-color" content="white" />
  <!-- Theme mode-->
  <script>
    let mode = window.localStorage.getItem("mode"),
      root = document.getElementsByTagName("html")[0];
    if (mode !== undefined && mode === "dark") {
      root.classList.add("dark-mode");
    } else {
      root.classList.remove("dark-mode");
    }
  </script>
  <!-- Page loading styles-->
  <style>
    #loading {
      text-align: center;
      background: url('<?= base_url(); ?>/templates/assets/img/loader.gif') no-repeat center;
      height: 150px;
    }

    .page-loading {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      width: 100%;
      height: 100%;
      -webkit-transition: all 0.4s 0.2s ease-in-out;
      transition: all 0.4s 0.2s ease-in-out;
      background-color: #fff;
      opacity: 0;
      visibility: hidden;
      z-index: 9999;
    }

    .dark-mode .page-loading {
      background-color: #121519;
    }

    .page-loading.active {
      opacity: 1;
      visibility: visible;
    }

    .page-loading-inner {
      position: absolute;
      top: 50%;
      left: 0;
      width: 100%;
      text-align: center;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
      -webkit-transition: opacity 0.2s ease-in-out;
      transition: opacity 0.2s ease-in-out;
      opacity: 0;
    }

    .page-loading.active>.page-loading-inner {
      opacity: 1;
    }

    .page-loading-inner>span {
      display: block;
      font-family: "Inter", sans-serif;
      font-size: 1rem;
      font-weight: normal;
      color: #6f788b;
    }

    .dark-mode .page-loading-inner>span {
      color: #fff;
      opacity: 0.6;
    }

    .page-spinner {
      display: inline-block;
      width: 2.75rem;
      height: 2.75rem;
      margin-bottom: 0.75rem;
      vertical-align: text-bottom;
      background-color: #d7dde2;
      border-radius: 50%;
      opacity: 0;
      -webkit-animation: spinner 0.75s linear infinite;
      animation: spinner 0.75s linear infinite;
    }

    .dark-mode .page-spinner {
      background-color: rgba(255, 255, 255, 0.25);
    }

    @-webkit-keyframes spinner {
      0% {
        -webkit-transform: scale(0);
        transform: scale(0);
      }

      50% {
        opacity: 1;
        -webkit-transform: none;
        transform: none;
      }
    }

    @keyframes spinner {
      0% {
        -webkit-transform: scale(0);
        transform: scale(0);
      }

      50% {
        opacity: 1;
        -webkit-transform: none;
        transform: none;
      }
    }
  </style>
  <!-- Page loading scripts-->
  <script>
    (function() {
      window.onload = function() {
        const preloader = document.querySelector(".page-loading");
        preloader.classList.remove("active");
        setTimeout(function() {
          preloader.remove();
        }, 1500);
      };
    })();
  </script>

  <!-- Import Google Font-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" id="google-font" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


  <!-- Vendor styles-->
  <link rel="stylesheet" media="screen" href="<?= base_url(); ?>/templates/assets/vendor/nouislider/dist/nouislider.min.css" />
  <link rel="stylesheet" media="screen" href="<?= base_url(); ?>/templates/assets/vendor/swiper/swiper-bundle.min.css" />

  <!-- ICONS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css" integrity="sha512-gMjQeDaELJ0ryCI+FtItusU9MkAifCZcGq789FrzkiM49D8lbDhoaUaIX4ASU187wofMNlgBJ4ckbrXM9sE6Pg==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <!-- Latest compiled and minified CSS -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"> -->



  <!-- Main Theme Styles + Bootstrap-->
  <link rel="stylesheet" media="screen" href="<?= base_url(); ?>/templates/assets/css/theme.min.css" />

  <!-- Customizer generated styles-->
  <style id="customizer-styles"></style>

  <!-- Google Tag Manager-->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        "gtm.start": new Date().getTime(),
        event: "gtm.js"
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != "dataLayer" ? "&l=" + l : "";
      j.async = true;
      j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, "script", "dataLayer", "GTM-WKV3GT5");
  </script>
</head>
<!-- Body-->

<body>
  <!-- Google Tag Manager (noscript)-->
  <noscript>
    <iframe src="//www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden"></iframe>
  </noscript>
  <!-- Page loading spinner-->
  <div class="page-loading active">
    <div class="page-loading-inner">
      <div class="page-spinner"></div>
      <span>Loading...</span>
    </div>
  </div>
  <!-- Customizer modal-->
  <div class="modal fade" id="customizer-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Your custom styles</h4>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body py-4">
          <p class="mb-3">
            Grab the generated styles below. Wrap them inside
            <code>&lt;style&gt;</code> tag and put in the
            <code>&lt;head&gt;</code> section of your HTML document.
          </p>
          <p class="mb-4">
            <span class="fw-medium">IMPORTANT:</span> In order for these
            styles to take effect you have to placed them below:<br /><code>&lt;link rel=&quot;stylesheet&quot; media=&quot;screen&quot;
              href=&quot;assets/css/theme.min.css&quot;&gt;</code>
          </p>
          <div class="bg-secondary overflow-hidden rounded-4">
            <pre class="text-wrap bg-transparent border-0 text-dark p-4" id="custom-generated-styles"></pre>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary w-100 w-sm-auto mb-3 mb-sm-0" type="button" data-bs-dismiss="modal">
            Close
          </button>
          <button class="btn btn-primary w-100 w-sm-auto ms-sm-3" type="button" id="copy-styles-btn">
            <i class="ai-copy me-2 ms-n1"></i>Copy styles
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- Search modal-->
  <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" data-focus-input="#search">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header d-block position-relative border-0 pb-3">
          <form class="position-relative w-100 mt-2 mb-4">
            <button class="btn-close position-absolute top-50 end-0 translate-middle-y m-0 me-n1" type="reset" data-bs-dismiss="modal"></button><i class="ai-search fs-xl position-absolute top-50 start-0 translate-middle-y ms-3"></i>
            <input class="form-control form-control-lg px-5" type="search" placeholder="Type to search" data-focus-on-open='["modal", "#searchModal"]' />
          </form>
          <div class="fs-xs fw-medium text-muted text-uppercase">
            Suggestions
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Cart offcanvas-->
  <div class="offcanvas offcanvas-end py-2 p-sm-4 p-md-5" id="cartOffcanvas" style="width: 680px">
    <!-- Title-->
    <div class="px-4 pt-3">
      <div class="d-flex justify-content-between align-items-center border-bottom pb-3 pb-sm-4">
        <h2 class="offcanvas-title d-flex align-items-center mb-1">
          Your cart
          <span class="fs-base fw-normal text-muted ms-3">(3 items)</span>
        </h2>
        <button class="btn-close mb-1 me-n1" type="button" data-bs-dismiss="offcanvas" data-bs-target="#cartOffcanvas"></button>
      </div>
    </div>
    <!-- Item-->
  </div>
  <!-- Action buttons-->
  </div>
  <header class="navbar navbar-expand-lg fixed-top bg-light">
    <div class="container">
      <a class="navbar-brand pe-sm-3" href="templet.html">
        <span class="text-primary flex-shrink-0">
          <img src="<?= base_url(); ?>/templates/assets/img/logoUtama.png" width="30" height="27" />
          <img src="<?= base_url(); ?>/templates/assets/img/logoUtama2.png" width="23" height="20" />
        </span>
        niverse</a>
      <div class="form-check form-switch mode-switch order-lg-2 me-3 me-lg-4 ms-auto" data-bs-toggle="mode">
        <input class="form-check-input" type="checkbox" id="theme-mode" />
        <label class="form-check-label" for="theme-mode">
          <i class="bi-sun fs-lg"></i>
        </label>
        <label class="form-check-label" for="theme-mode">
          <i class="bi-moon fs-lg"></i>
        </label>
      </div>
      <button class="navbar-toggler ms-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- NAV -->
      <nav class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav navbar-nav-scroll me-auto" style="--ar-scroll-height: 520px">

          <li class="nav-item">
            <a class="nav-link " href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#landings">Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Kontak</a>
          </li>
        </ul>

      </nav>

    </div>
  </header>
  <!-- Navbar. Remove 'fixed-top' class to make the navigation bar scrollable with the page-->
  <!-- Page content-->
  <section class="container py-5 mt-5 mb-sm-2 mb-lg-3 mb-xl-4 mb-xxl-5">

    <!-- Title + price shown on screens < 768px-->
    <div class="row pb-sm-1 pb-md-4">
      <div class="zoom-effect-wrapper rounded-1">
        <div class="zoom-effect-img bg-secondary p-4">
          <img class="d-block mx-auto" src="<?= base_url() ?>/templates/<?= $product['gambar'] ?>" width="562" alt="Candle image #1" />
        </div>
      </div>
      <!-- Gallery-->
      <div class="col-md-6 gallery mb-3 mb-md-0">
        <!-- Item-->
        <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100 rounded-1 overflow-hidden zindex-2 opacity-0">
          <i class="ai-zoom-in fs-2 text-white position-relative zindex-2"></i>
          <div class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-20"></div>
        </div>

      </div>
      <div class="d-flex align-items-center pt-3 py-3">
        <span class="badge bg-faded-danger text-danger d-none d-md-inline-block me-4">Sale</span><span class="fs-sm"><?= $product['brand']; ?></span>
      </div>
      <h1 class="d-none d-md-inline-block pb-1 mb-2"><?= $product['nama']; ?></h1>
      <p class="fs-sm mb-4">
        Find aute irure reprehenderit in voluptate velit esse cillum
        dolore eu fugiatnulla pariatur neque congue aliqua dolor do amet
        sint ovar velit.
      </p>
      <div class="d-none d-md-flex align-items-center pb-2 mb-1">
        <div class="h3 mb-1 me-3"><?= $product['harga']; ?></div>
      </div>
      <div class="spek" style="z-index: 99999;">
        <div class="h3 mb-3 me-3">Spesifikasi : </div>
        <ul class="ms-n3">
          <li>
            <p class="fs-sm"><?= $product['os']; ?></p>
          </li>
          <li>
            <p class="fs-sm"><?= $product['desk_cpu']; ?></p>
          </li>
          <li>
            <p class="fs-sm"><?= $product['gpu']; ?></p>
          </li>
          <li>
            <p class="fs-sm"><?= $product['nama_ram']; ?> <?= $product['tipe_ram']; ?></p>
          </li>
          <li>
            <p class="fs-sm"><?= $product['hdd']; ?></p>
          </li>
        </ul>

      </div>
      <div id="review" style="z-index: 99999;">
        (<?= $jmlReview ?>) orang review. <?= round($review, 1) ?>
        <?php if (floor($review) == 1) { ?>
          <i class="fa fa-star ranting text-danger" val="1"></i>
          <i class="fa fa-star ranting" val="2"></i>
          <i class="fa fa-star ranting" val="3"></i>
          <i class="fa fa-star ranting" val="4"></i>
          <i class="fa fa-star ranting" val="5"></i>
        <?php } elseif (floor($review) == 2) { ?>
          <i class="fa fa-star ranting text-danger" val="1"></i>
          <i class="fa fa-star ranting text-danger" val="2"></i>
          <i class="fa fa-star ranting" val="3"></i>
          <i class="fa fa-star ranting" val="4"></i>
          <i class="fa fa-star ranting" val="5"></i>
        <?php } elseif (floor($review) == 3) { ?>
          <i class="fa fa-star ranting text-danger" val="1"></i>
          <i class="fa fa-star ranting text-danger" val="2"></i>
          <i class="fa fa-star ranting text-danger" val="3"></i>
          <i class="fa fa-star ranting" val="4"></i>
          <i class="fa fa-star ranting" val="5"></i>
        <?php } elseif (floor($review) == 4) { ?>
          <i class="fa fa-star ranting text-danger" val="1"></i>
          <i class="fa fa-star ranting text-danger" val="2"></i>
          <i class="fa fa-star ranting text-danger" val="3"></i>
          <i class="fa fa-star ranting text-danger" val="4"></i>
          <i class="fa fa-star ranting" val="5"></i>
        <?php } elseif (floor($review) == 5) { ?>
          <i class="fa fa-star ranting text-danger" val="1"></i>
          <i class="fa fa-star ranting text-danger" val="2"></i>
          <i class="fa fa-star ranting text-danger" val="3"></i>
          <i class="fa fa-star ranting text-danger" val="4"></i>
          <i class="fa fa-star ranting text-danger" val="5"></i>
        <?php } else { ?>
          <i class="fa fa-star ranting" val="1"></i>
          <i class="fa fa-star ranting" val="2"></i>
          <i class="fa fa-star ranting" val="3"></i>
          <i class="fa fa-star ranting" val="4"></i>
          <i class="fa fa-star ranting" val="5"></i>
        <?php } ?>
      </div>
      <div class="d-sm-flex d-md-block d-lg-flex py-4 py-md-5 my-3 my-md-0 mt-lg-0 mb-lg-4">
        <div class="count-input bg-gray rounded-3 me-4 mb-3 mb-sm-0 mb-md-3 mb-lg-0">
          <button class="btn btn-icon btn-lg fs-xl" type="button" data-decrement>
            -
          </button>
          <input class="form-control" type="number" value="1" readonly />
          <button class="btn btn-icon btn-lg fs-xl" type="button" data-increment>
            +
          </button>
        </div>
        <div class="d-flex align-items-center">
          <button class="btn btn-lg btn-primary w-100 w-lg-auto me-2" type="button" id="cart">
            Add to cart
          </button>
        </div>
      </div>

    </div>


  </section>



  <!-- Features (carousel on screens < 992px)-->
  <section class="container border-top py-5 mb-1 mb-sm-2 mb-md-4 mb-lg-5">
    <div class="swiper" data-swiper-options='{
      "slidesPerView": 1,
      "spaceBetween": 24,
      "pagination": {
        "el": ".swiper-pagination",
        "clickable": true
      },
      "breakpoints": {
        "400": {
          "slidesPerView": 2,
          "spaceBetween": 24
        },
        "700": {
          "slidesPerView": 3,
          "spaceBetween": 30
        },
        "991": {
          "slidesPerView": 4,
          "spaceBetween": 40
        }
      }
    }'>
      <div class="swiper-wrapper">
        <!-- Item-->
        <div class="swiper-slide text-center text-sm-start">
          <div class="text-primary mb-3 mb-sm-4">
            <svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
              <path d="M37.7794 10.6909L20.2794 1.94092C20.1926 1.89757 20.097 1.875 20 1.875C19.903 1.875 19.8074 1.89757 19.7206 1.94092L2.22063 10.6909C2.11674 10.7428 2.02936 10.8227 1.96832 10.9215C1.90727 11.0203 1.87496 11.1341 1.87501 11.2503V28.7503C1.87437 28.867 1.90641 28.9815 1.96749 29.0809C2.02857 29.1803 2.11626 29.2606 2.22063 29.3128L19.7206 38.0628C19.8074 38.1061 19.903 38.1287 20 38.1287C20.097 38.1287 20.1926 38.1061 20.2794 38.0628L37.7794 29.3128C37.8838 29.2606 37.9714 29.1803 38.0325 29.0809C38.0936 28.9815 38.1256 28.867 38.125 28.7503V11.2503C38.1251 11.1341 38.0928 11.0203 38.0317 10.9215C37.9706 10.8227 37.8833 10.7428 37.7794 10.6909ZM20 19.3015L15.1144 16.8584L30.7306 8.56279L36.1056 11.2503L20 19.3015ZM10.1144 14.3584L25.7306 6.06279L29.3556 7.87529L13.7413 16.1722L10.1144 14.3584ZM9.37501 15.3865L13.125 17.2615V22.2415L11.6919 20.8084C11.5747 20.6912 11.4158 20.6253 11.25 20.6253H9.37501V15.3865ZM20 3.19904L24.3575 5.37529L8.74126 13.6722L3.89751 11.2503L20 3.19904ZM3.12501 12.2615L8.12501 14.7615V21.2503C8.12501 21.416 8.19086 21.575 8.30807 21.6922C8.42528 21.8094 8.58425 21.8753 8.75001 21.8753H10.9913L13.3081 24.1922C13.3955 24.2795 13.5069 24.339 13.6281 24.3632C13.7493 24.3873 13.875 24.3749 13.9892 24.3276C14.1034 24.2803 14.201 24.2002 14.2696 24.0974C14.3383 23.9947 14.375 23.8739 14.375 23.7503V17.8865L19.375 20.3865V36.489L3.12501 28.364V12.2615ZM20.625 36.489V20.3865L36.875 12.2615V28.364L20.625 36.489Z" fill="currentColor"></path>
            </svg>
          </div>
          <h3 class="h5 mb-2 mb-sm-3">Fast and free delivery</h3>
          <p class="fs-sm mb-0">
            Free delivery for all orders over $200 honcus egestas lorem
            honcus egestas
          </p>
        </div>
        <!-- Item-->
        <div class="swiper-slide text-center text-sm-start">
          <div class="text-primary mb-3 mb-sm-4">
            <svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
              <path d="M38 27.4c-1.5 3.5-4 6.6-7.2 8.7s-6.9 3.3-10.8 3.3c-3.3 0-6.5-.8-9.4-2.4-2.4-1.3-4.4-3.1-6-5.2v3.1c0 .2-.1.3-.2.4a.76.76 0 0 1-.4.2.76.76 0 0 1-.4-.2c-.1-.1-.2-.2-.2-.4V30c0-.2.1-.3.2-.4 0 0 .1 0 .1-.1h0s.1 0 .1-.1h.1 4.8c.2 0 .3.1.4.2a.76.76 0 0 1 .2.4.76.76 0 0 1-.2.4.76.76 0 0 1-.4.2H5.1c2.3 3.3 5.7 5.7 9.6 6.9 4.2 1.3 8.8 1 12.8-.8s7.3-5 9.1-9c1.9-4 2.2-8.5 1-12.8C36.4 10.7 33.7 7 30 4.6s-8.1-3.4-12.5-2.8C13.1 2.5 9.1 4.7 6.2 8s-4.5 7.6-4.5 12c0 .2-.1.3-.2.4a.76.76 0 0 1-.4.2c-.2 0-.3-.1-.4-.2s-.2-.2-.2-.4c0-3.8 1.1-7.6 3.3-10.8S9 3.5 12.6 2C16.1.6 20 .2 23.8 1s7.2 2.6 10 5.3c2.7 2.7 4.6 6.2 5.3 10 .7 3.7.3 7.6-1.1 11.1zm-14.1-3.8c0 1-.4 2-1.1 2.8-.6.5-1.3.9-2 1.1v.7c0 .2-.1.4-.2.5s-.3.2-.5.2-.4-.1-.5-.2-.2-.3-.2-.5v-.7a3.09 3.09 0 0 1-2-1.1c-.7-.7-1.1-1.7-1.1-2.8 0-.2.1-.4.2-.5s.3-.2.5-.2.4.1.5.2.2.3.2.5c0 .7.3 1.3.7 1.8.5.5 1.1.7 1.8.7s1.3-.3 1.8-.7c.5-.5.7-1.1.7-1.8s-.3-1.8-2.7-2.5c-3-.9-3.7-2.6-3.7-3.8 0-1 .4-2 1.1-2.8.6-.6 1.3-.9 2-1.1v-.7c0-.2.1-.4.2-.5s.3-.2.5-.2.4.1.5.2.2.3.2.5v.7a3.09 3.09 0 0 1 2 1.1c.7.7 1.1 1.7 1.1 2.8 0 .2-.1.4-.2.5s-.3.2-.5.2-.4-.1-.5-.2-.2-.3-.2-.5c0-.7-.3-1.3-.7-1.8-.5-.5-1.1-.7-1.8-.7s-1.3.3-1.8.7c-.5.5-.7 1.1-.7 1.8 0 .4 0 1.7 2.7 2.5 2.4.7 3.7 2 3.7 3.8z" fill="currentColor"></path>
            </svg>
          </div>
          <h3 class="h5 mb-2 mb-sm-3">Money back guarantee</h3>
          <p class="fs-sm mb-0">
            We return money within 30 days honcus egestas lorem honcus
            egestas
          </p>
        </div>
        <!-- Item-->
        <div class="swiper-slide text-center text-sm-start">
          <div class="text-primary mb-3 mb-sm-4">
            <svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
              <path d="M33.6825 13.683C33.6825 6.12609 27.5564 0 19.9995 0C12.4426 0 6.31646 6.12609 6.31646 13.683C4.36283 13.9263 2.51562 15.2033 2.51562 18.168V25.3136C2.51562 28.6583 4.85694 29.8746 7.07663 29.8746H9.28111C9.70091 29.8746 10.0413 29.5342 10.0413 29.1144V14.3976C10.0413 13.9778 9.70091 13.6374 9.28111 13.6374H7.83679C7.83679 6.92018 13.2823 1.47472 19.9995 1.47472C26.7167 1.47472 32.1621 6.92018 32.1621 13.6374H30.7178C30.298 13.6374 29.9577 13.9778 29.9577 14.3976V29.0916C29.9577 29.5114 30.298 29.8518 30.7178 29.8518H32.1621C31.9493 35.0741 29.4407 36.298 24.4312 36.5184V36.0091C24.4312 35.1694 23.7506 34.4888 22.9109 34.4888H18.1295C17.2898 34.4888 16.6091 35.1694 16.6091 36.0091V38.4797C16.6091 39.3194 17.2898 40 18.1295 40H22.9261C23.7658 40 24.4464 39.3194 24.4464 38.4797V38.0388C29.2659 37.8183 33.4316 36.8225 33.6825 29.8062C35.6361 29.5629 37.4833 28.2858 37.4833 25.3212V18.1756C37.4833 15.1957 35.6437 13.9263 33.6825 13.683ZM8.52094 15.1045V28.3314H7.03862C5.91357 28.3314 3.99795 27.9361 3.99795 25.2908V18.1452C3.99795 15.5226 5.89077 15.1045 7.03862 15.1045H8.52094ZM22.9261 37.3318V38.4873H18.1295V36.0167H22.9261V37.3318ZM35.963 25.3136C35.963 27.9361 34.0702 28.3542 32.9223 28.3542H31.478V15.1577H32.9603C34.0854 15.1577 36.001 15.553 36.001 18.1984L35.963 25.3136Z" fill="currentColor"></path>
            </svg>
          </div>
          <h3 class="h5 mb-2 mb-sm-3">24/7 customer support</h3>
          <p class="fs-sm mb-0">
            Friendly 24/7 customer support honcus egestas lorem honcus
            egestas
          </p>
        </div>
        <!-- Item-->
        <div class="swiper-slide text-center text-sm-start">
          <div class="text-primary mb-3 mb-sm-4">
            <svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
              <path d="M35.1422 8.0989L20.1085 0.0881401C19.8855 -0.0308936 19.6182 -0.0292231 19.3968 0.0923166L4.77905 8.10308C4.53931 8.23464 4.39062 8.48607 4.39062 8.75964V19.2237C4.3994 27.8255 9.49571 35.6074 17.377 39.0535L19.406 39.9377C19.5956 40.0204 19.8115 40.0208 20.0016 39.9385L22.2879 38.9512C30.3153 35.5798 35.5378 27.7228 35.5386 19.0162V8.75964C35.5386 8.48315 35.3862 8.22879 35.1422 8.0989ZM34.0417 19.0162C34.04 27.1226 29.1764 34.4371 21.7019 37.5742L21.6969 37.5767L19.7059 38.4362L17.9759 37.6815C10.6397 34.4738 5.89546 27.2307 5.88711 19.2237V9.20278L19.7614 1.59882L34.0417 9.20821V19.0162Z" fill="currentColor"></path>
              <path d="M14.2398 18.7389C13.9713 18.4244 13.4989 18.3873 13.1844 18.6558C12.8699 18.924 12.8327 19.3967 13.1013 19.7108L17.0549 24.3406C17.3188 24.6497 17.7812 24.6919 18.0961 24.4354L27.3039 16.9442C27.6247 16.6836 27.6731 16.2121 27.4121 15.8913C27.1514 15.571 26.6799 15.5221 26.3591 15.7831L17.7185 22.8124L14.2398 18.7389Z" fill="currentColor"></path>
            </svg>
          </div>
          <h3 class="h5 mb-2 mb-sm-3">Secure online payment</h3>
          <p class="fs-sm mb-0">
            We possess SSL / Secure сertificate honcus egestas lorem honcus
            egestas
          </p>
        </div>
      </div>
      <!-- Pagination (Bullets)-->
      <div class="swiper-pagination position-relative bottom-0 pt-1 mt-4 d-lg-none"></div>
    </div>
  </section>
  </main>
  <!-- Footer-->
  <footer class="footer bg-dark position-relative pb-4 pt-md-3 py-lg-4 py-xl-5">
    <div class="d-none d-dark-mode-block position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(255, 255, 255, 0.02)"></div>
    <div class="dark-mode container position-relative zindex-2 pt-5 pb-2">
      <!-- Columns with links-->
      <div class="row" id="links">
        <div class="col-md-3 col-xl-2 pb-2 pb-md-0">
          <h3 class="h6 text-uppercase d-none d-md-block">Useful links</h3>
          <a class="btn-more h6 mb-1 text-uppercase text-decoration-none d-flex align-items-center collapsed d-md-none" href="#useful" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="useful" data-show-label="Useful links" data-hide-label="Useful links"></a>
          <div class="collapse d-md-block" id="useful" data-bs-parent="#links">
            <ul class="nav flex-column pb-2 pb-md-0">
              <li class="nav-item">
                <a class="nav-link fw-normal px-0 py-1" href="#">Trending</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-normal px-0 py-1" href="#">Sale</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-normal px-0 py-1" href="#">About us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-normal px-0 py-1" href="#">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-normal px-0 py-1" href="#">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-normal px-0 py-1" href="#">Shipping &amp; Returns</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-normal px-0 py-1" href="#">Delivery info</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-xl-2 pb-2 pb-md-0">
          <h3 class="h6 text-uppercase d-none d-md-block">Decors</h3>
          <a class="btn-more h6 mb-1 text-uppercase text-decoration-none d-flex align-items-center collapsed d-md-none" href="#decors" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="decors" data-show-label="Decors" data-hide-label="Decors"></a>
          <div class="collapse d-md-block" id="decors" data-bs-parent="#links">
            <ul class="nav flex-column pb-2 pb-md-0">
              <li class="nav-item">
                <a class="nav-link fw-normal px-0 py-1" href="#">Vases</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-normal px-0 py-1" href="#">Mirrors</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-normal px-0 py-1" href="#">Paintings</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-normal px-0 py-1" href="#">Figurines</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-normal px-0 py-1" href="#">Textile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-normal px-0 py-1" href="#">Lighting</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-normal px-0 py-1" href="#">Photo frames</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-xl-2 pb-2 pb-md-0">
          <h3 class="h6 text-uppercase d-none d-md-block">Categories</h3>
          <a class="btn-more h6 mb-1 text-uppercase text-decoration-none d-flex align-items-center collapsed d-md-none" href="#categories" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="categories" data-show-label="Categories" data-hide-label="Categories"></a>
          <div class="collapse d-md-block" id="categories" data-bs-parent="#links">
            <ul class="nav flex-column pb-2 pb-md-0">
              <li class="nav-item">
                <a class="nav-link fw-normal px-0 py-1" href="#">Kitchen</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-normal px-0 py-1" href="#">Bathroom</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-normal px-0 py-1" href="#">Living room</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-normal px-0 py-1" href="#">Bedroom</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 pb-2 pb-md-0">
          <h3 class="h6 text-uppercase d-none d-md-block">Showroom</h3>
          <a class="btn-more h6 mb-1 text-uppercase text-decoration-none d-flex align-items-center collapsed d-md-none" href="#showroom" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="showroom" data-show-label="Showroom" data-hide-label="Showroom"></a>
          <div class="collapse d-md-block" id="showroom" data-bs-parent="#links">
            <ul class="nav flex-column pb-3">
              <li class="nav-item">
                <a class="nav-link fw-normal px-0 py-1" href="#">1501 Main St, Ste 50<br />Tewksbury MA 01876</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-normal px-0 py-1" href="mailto:email@example.com">email@example.com</a>
              </li>
              <li class="nav-item">
                <a class="nav-link fw-normal px-0 py-1" href="+15262200459">+1 526 220 0459</a>
              </li>
            </ul>
            <ul class="list-unstyled mb-0 pb-3 pb-md-0">
              <li class="text-nav mb-2">Mon-Fri: 8:00 - 21:00</li>
              <li class="text-nav mb-2">Sat: 8:00 - 21:00</li>
              <li class="text-nav">Sun: 8:00 - 21:00</li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-xl-3 mt-md-2 mt-xl-0 pt-2 pt-md-4 pt-xl-0">
          <h3 class="h6 text-uppercase mb-1 pb-1">Download our app</h3>
          <div class="d-flex d-xl-block d-xxl-flex">
            <a class="btn btn-secondary px-3 py-2 mt-3 me-3" href="#"><img class="mx-1" src="assets/img/market/appstore-light.svg" width="120" alt="App Store" /></a><a class="btn btn-secondary px-3 py-2 mt-3" href="#"><img class="mx-1" src="assets/img/market/googleplay-light.svg" width="119" alt="Google Play" /></a>
          </div>
        </div>
      </div>
      <!-- Nav + Switcher-->
      <div class="d-sm-flex align-items-end justify-content-between border-bottom mt-2 mt-sm-1 pt-4 pt-sm-5">
        <!-- Nav-->
        <nav class="d-flex mb-3 mb-sm-4">
          <a class="nav-link text-muted fs-sm fw-normal ps-0 pe-2 py-2 me-4" href="#">Support</a><a class="nav-link text-muted fs-sm fw-normal ps-0 pe-2 py-2 me-4" href="#">Privacy</a><a class="nav-link text-muted fs-sm fw-normal ps-0 pe-2 py-2 me-sm-4" href="#">Terms of use</a>
        </nav>
        <!-- Language / currency switcher-->
        <div class="dropdown mb-4">
          <button class="btn btn-outline-secondary dropdown-toggle px-4" type="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
            <img class="me-2" src="assets/img/flags/en.png" width="18" alt="English / USD" />Eng / USD
          </button>
          <div class="dropdown-menu dropdown-menu-end my-1">
            <div class="dropdown-item">
              <select class="form-select form-select-sm">
                <option value="usd">$ USD</option>
                <option value="eur">€ EUR</option>
                <option value="ukp">£ UKP</option>
                <option value="jpy">¥ JPY</option>
              </select>
            </div>
            <a class="dropdown-item pb-1" href="#"><img class="me-2" src="assets/img/flags/fr.png" width="18" alt="Français" />Français</a><a class="dropdown-item pb-1" href="#"><img class="me-2" src="assets/img/flags/de.png" width="18" alt="Deutsch" />Deutsch</a><a class="dropdown-item" href="#"><img class="me-2" src="assets/img/flags/it.png" width="18" alt="Italiano" />Italiano</a>
          </div>
        </div>
      </div>
      <!-- Logo + Socials + Cards-->
      <div class="d-sm-flex align-items-center pt-4 geblek">
        <div class="d-sm-flex align-items-center pe-sm-2">
          <a class="navbar-brand d-inline-flex align-items-center me-sm-5 mb-4 mb-sm-0" href="index.html"><span class="text-primary flex-shrink-0 me-2">
              <svg version="1.1" width="35" height="32" viewBox="0 0 36 33" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M35.6,29c-1.1,3.4-5.4,4.4-7.9,1.9c-2.3-2.2-6.1-3.7-9.4-3.7c-3.1,0-7.5,1.8-10,4.1c-2.2,2-5.8,1.5-7.3-1.1c-1-1.8-1.2-4.1,0-6.2l0.6-1.1l0,0c0.6-0.7,4.4-5.2,12.5-5.7c0.5,1.8,2,3.1,3.9,3.1c2.2,0,4.1-1.9,4.1-4.2s-1.8-4.2-4.1-4.2c-2,0-3.6,1.4-4,3.3H7.7c-0.8,0-1.3-0.9-0.9-1.6l5.6-9.8c2.5-4.5,8.8-4.5,11.3,0L35.1,24C36,25.7,36.1,27.5,35.6,29z"></path>
              </svg></span><span class="text-nav">Around</span></a>
          <div class="text-nowrap mb-4 mb-sm-0">
            <a class="btn btn-icon btn-sm btn-secondary btn-telegram rounded-circle mx-2 ms-sm-0 me-sm-3" href="#"><i class="ai-telegram"></i></a><a class="btn btn-icon btn-sm btn-secondary btn-instagram rounded-circle mx-2 ms-sm-0 me-sm-3" href="#"><i class="ai-instagram"></i></a><a class="btn btn-icon btn-sm btn-secondary btn-facebook rounded-circle mx-2 ms-sm-0 me-sm-3" href="#"><i class="ai-facebook"></i></a><a class="btn btn-icon btn-sm btn-secondary btn-pinterest rounded-circle mx-2 ms-sm-0 me-sm-3" href="#"><i class="ai-pinterest"></i></a>
          </div>
        </div>
        <img class="ms-sm-auto" src="assets/img/shop/footer-cards.png" width="187" alt="Accepted cards" />
      </div>
    </div>
  </footer>

  <!-- <button id="click">click</button> -->

  <div style="cursor: pointer;">
    (<?= $jmlReview ?>) orang review. <?= round($review, 1) ?>
    <?php if (floor($review) == 1) { ?>
      <i class="fa fa-star ranting text-danger" val="1"></i>
      <i class="fa fa-star ranting" val="2"></i>
      <i class="fa fa-star ranting" val="3"></i>
      <i class="fa fa-star ranting" val="4"></i>
      <i class="fa fa-star ranting" val="5"></i>
    <?php } elseif (floor($review) == 2) { ?>
      <i class="fa fa-star ranting text-danger" val="1"></i>
      <i class="fa fa-star ranting text-danger" val="2"></i>
      <i class="fa fa-star ranting" val="3"></i>
      <i class="fa fa-star ranting" val="4"></i>
      <i class="fa fa-star ranting" val="5"></i>
    <?php } elseif (floor($review) == 3) { ?>
      <i class="fa fa-star ranting text-danger" val="1"></i>
      <i class="fa fa-star ranting text-danger" val="2"></i>
      <i class="fa fa-star ranting text-danger" val="3"></i>
      <i class="fa fa-star ranting" val="4"></i>
      <i class="fa fa-star ranting" val="5"></i>
    <?php } elseif (floor($review) == 4) { ?>
      <i class="fa fa-star ranting text-danger" val="1"></i>
      <i class="fa fa-star ranting text-danger" val="2"></i>
      <i class="fa fa-star ranting text-danger" val="3"></i>
      <i class="fa fa-star ranting text-danger" val="4"></i>
      <i class="fa fa-star ranting" val="5"></i>
    <?php } elseif (floor($review) == 5) { ?>
      <i class="fa fa-star ranting text-danger" val="1"></i>
      <i class="fa fa-star ranting text-danger" val="2"></i>
      <i class="fa fa-star ranting text-danger" val="3"></i>
      <i class="fa fa-star ranting text-danger" val="4"></i>
      <i class="fa fa-star ranting text-danger" val="5"></i>
    <?php } else { ?>
      <i class="fa fa-star ranting" val="1"></i>
      <i class="fa fa-star ranting" val="2"></i>
      <i class="fa fa-star ranting" val="3"></i>
      <i class="fa fa-star ranting" val="4"></i>
      <i class="fa fa-star ranting" val="5"></i>
    <?php } ?>
  </div>

  <script>
    $(document).ready(function() {
      $(".ranting").click(function(e) {
        e.preventDefault();
        $.ajax({
          type: "post",
          url: "<?= base_url("produk/review"); ?>",
          data: {
            id: "<?= $product['id']; ?>",
            ranting: $(this).attr("val")
          },
          dataType: "json",
          success: function(response) {
            alert(response.sukses);
            window.location.reload();
          }
        });
      });
    });
  </script>

  <!-- Vendor script: js libraries and plugins-->
  <!-- jQuery library -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>


  <script src="<?= base_url(); ?>/templates/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>/templates/assets/vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
  <script src="<?= base_url(); ?>/templates/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?= base_url(); ?>/templates/assets/vendor/lightgallery/lightgallery.min.js"></script>
  <script src="<?= base_url(); ?>/templates/assets/vendor/lightgallery/plugins/fullscreen/lg-fullscreen.min.js"></script>
  <script src="<?= base_url(); ?>/templates/assets/vendor/lightgallery/plugins/zoom/lg-zoom.min.js"></script>
  <script src="<?= base_url(); ?>/templates/assets/vendor/lightgallery/plugins/thumbnail/lg-thumbnail.min.js"></script>
  <!-- Main theme script-->
  <script src="<?= base_url(); ?>/templates/assets/js/theme.min.js"></script>
  <!-- Customizer-->

  <script>
    setTimeout(function() {
      $(".cek").html("<button id='mantap'>button</button>")
    }, 3000);

    $('#mantap').click(function(e) {
      e.preventDefault();
      alert('cek');
    });


    // const ranting = document.querySelectorAll('.ranting');
    // ranting.forEach(element => {
    //   element.addEventListener("click", function () { 
    //     console.log("cek");
    //    });
    // });

    // jQuery.noConflict();
  </script>

  <script>
    !(function() {
      function e(e) {
        return localStorage.getItem(e);
      }

      function r(e, r) {
        localStorage.setItem(e, r);
      }
      var t = document.getElementById("customizer-styles"),
        n = document.getElementById("custom-generated-styles"),
        o = `\n    :root {\n      ${
            e("theme-primary") && `--ar-primary: ${e("theme-primary")};`
          }\n      ${
            e("theme-primary-rgb") &&
            `--ar-primary-rgb: ${e("theme-primary-rgb")};`
          }\n      ${
            e("theme-warning") && `--ar-warning-rgb: ${e("theme-warning")};`
          }\n      ${
            e("theme-warning-rgb") &&
            `--ar-warning-rgb: ${e("theme-warning-rgb")};`
          }\n      ${
            e("theme-info") && `--ar-info-rgb: ${e("theme-info")};`
          }\n      ${
            e("theme-info-rgb") && `--ar-info-rgb: ${e("theme-info-rgb")};`
          }\n      ${
            e("theme-success") && `--ar-success-rgb: ${e("success-info")};`
          }\n      ${
            e("theme-success-rgb") &&
            `--ar-success-rgb: ${e("success-info-rgb")};`
          }\n      ${
            e("theme-danger") && `--ar-danger-rgb: ${e("danger-info")};`
          }\n      ${
            e("theme-danger-rgb") && `--ar-danger-rgb: ${e("danger-info-rgb")};`
          }\n      ${
            e("theme-font-family") &&
            `--ar-body-font-family: ${e("theme-font-family")};`
          }\n      ${
            e("theme-root-font-size") &&
            `--ar-root-font-size: ${e("theme-root-font-size")};`
          }\n      ${
            e("theme-body-font-size") &&
            `--ar-body-font-size: ${e("theme-body-font-size")};`
          }\n      ${
            e("theme-border-width") &&
            `--ar-border-width: ${e("theme-border-width")};`
          }\n      ${
            e("theme-border-radius") &&
            `--ar-border-radius: ${e("theme-border-radius")};`
          }\n      ${
            e("theme-border-radius-sm") &&
            `--ar-border-radius-sm: ${e("theme-border-radius-sm")};`
          }\n      ${
            e("theme-border-radius-lg") &&
            `--ar-border-radius-lg: ${e("theme-border-radius-lg")};`
          }\n      ${
            e("theme-border-radius-xl") &&
            `--ar-border-radius-xl: ${e("theme-border-radius-xl")};`
          }\n      ${
            e("theme-border-radius-2xl") &&
            `--ar-border-radius-2xl: ${e("theme-border-radius-2xl")};`
          }\n      ${
            e("theme-primary") && `--ar-link-color: ${e("theme-primary")};`
          }\n      ${
            e("theme-primary-btn-hover-active-border-bg-color") &&
            `--ar-link-hover-color: ${e(
              "theme-primary-btn-hover-active-border-bg-color"
            )};`
          }\n    }\n    .btn-primary {\n      ${
            e("theme-primary") && `--ar-btn-bg: ${e("theme-primary")};`
          }\n      ${
            e("theme-primary") &&
            `--ar-btn-border-color: ${e("theme-primary")};`
          }\n      ${
            e("theme-primary-btn-hover-active-border-bg-color") &&
            `--ar-btn-hover-bg: ${e(
              "theme-primary-btn-hover-active-border-bg-color"
            )};`
          }\n      ${
            e("theme-primary-btn-hover-active-border-bg-color") &&
            `--ar-btn-hover-border-color: ${e(
              "theme-primary-btn-hover-active-border-bg-color"
            )};`
          }\n      ${
            e("theme-primary-btn-hover-active-border-bg-color") &&
            `--ar-btn-active-bg: ${e(
              "theme-primary-btn-hover-active-border-bg-color"
            )};`
          }\n      ${
            e("theme-primary-btn-hover-active-border-bg-color") &&
            `--ar-btn-active-border-color: ${e(
              "theme-primary-btn-hover-active-border-bg-color"
            )};`
          }\n      ${
            e("theme-primary") && `--ar-btn-disabled-bg: ${e("theme-primary")};`
          }\n      ${
            e("theme-primary") &&
            `--ar-btn-disabled-border-color: ${e("theme-primary")};`
          }\n    }\n    .btn-warning {\n      ${
            e("theme-warning") && `--ar-btn-bg: ${e("theme-warning")};`
          }\n      ${
            e("theme-warning") &&
            `--ar-btn-border-color: ${e("theme-warning")};`
          }\n      ${
            e("theme-warning-btn-hover-active-border-bg-color") &&
            `--ar-btn-hover-bg: ${e(
              "theme-warning-btn-hover-active-border-bg-color"
            )};`
          }\n      ${
            e("theme-warning-btn-hover-active-border-bg-color") &&
            `--ar-btn-hover-border-color: ${e(
              "theme-warning-btn-hover-active-border-bg-color"
            )};`
          }\n      ${
            e("theme-warning-btn-hover-active-border-bg-color") &&
            `--ar-btn-active-bg: ${e(
              "theme-warning-btn-hover-active-border-bg-color"
            )};`
          }\n      ${
            e("theme-warning-btn-hover-active-border-bg-color") &&
            `--ar-btn-active-border-color: ${e(
              "theme-warning-btn-hover-active-border-bg-color"
            )};`
          }\n      ${
            e("theme-warning") && `--ar-btn-disabled-bg: ${e("theme-warning")};`
          }\n      ${
            e("theme-warning") &&
            `--ar-btn-disabled-border-color: ${e("theme-warning")};`
          }\n    }\n    .btn-info {\n      ${
            e("theme-info") && `--ar-btn-bg: ${e("theme-info")};`
          }\n      ${
            e("theme-info") && `--ar-btn-border-color: ${e("theme-info")};`
          }\n      ${
            e("theme-info-btn-hover-active-border-bg-color") &&
            `--ar-btn-hover-bg: ${e(
              "theme-info-btn-hover-active-border-bg-color"
            )};`
          }\n      ${
            e("theme-info-btn-hover-active-border-bg-color") &&
            `--ar-btn-hover-border-color: ${e(
              "theme-info-btn-hover-active-border-bg-color"
            )};`
          }\n      ${
            e("theme-info-btn-hover-active-border-bg-color") &&
            `--ar-btn-active-bg: ${e(
              "theme-info-btn-hover-active-border-bg-color"
            )};`
          }\n      ${
            e("theme-info-btn-hover-active-border-bg-color") &&
            `--ar-btn-active-border-color: ${e(
              "theme-info-btn-hover-active-border-bg-color"
            )};`
          }\n      ${
            e("theme-info") && `--ar-btn-disabled-bg: ${e("theme-info")};`
          }\n      ${
            e("theme-info") &&
            `--ar-btn-disabled-border-color: ${e("theme-info")};`
          }\n    }\n    .btn-success {\n      ${
            e("theme-success") && `--ar-btn-bg: ${e("theme-success")};`
          }\n      ${
            e("theme-success") &&
            `--ar-btn-border-color: ${e("theme-success")};`
          }\n      ${
            e("theme-success-btn-hover-active-border-bg-color") &&
            `--ar-btn-hover-bg: ${e(
              "theme-success-btn-hover-active-border-bg-color"
            )};`
          }\n      ${
            e("theme-success-btn-hover-active-border-bg-color") &&
            `--ar-btn-hover-border-color: ${e(
              "theme-success-btn-hover-active-border-bg-color"
            )};`
          }\n      ${
            e("theme-success-btn-hover-active-border-bg-color") &&
            `--ar-btn-active-bg: ${e(
              "theme-success-btn-hover-active-border-bg-color"
            )};`
          }\n      ${
            e("theme-success-btn-hover-active-border-bg-color") &&
            `--ar-btn-active-border-color: ${e(
              "theme-success-btn-hover-active-border-bg-color"
            )};`
          }\n      ${
            e("theme-success") && `--ar-btn-disabled-bg: ${e("theme-success")};`
          }\n      ${
            e("theme-success") &&
            `--ar-btn-disabled-border-color: ${e("theme-success")};`
          }\n    }\n    .btn-danger {\n      ${
            e("theme-danger") && `--ar-btn-bg: ${e("theme-danger")};`
          }\n      ${
            e("theme-danger") && `--ar-btn-border-color: ${e("theme-danger")};`
          }\n      ${
            e("theme-danger-btn-hover-active-border-bg-color") &&
            `--ar-btn-hover-bg: ${e(
              "theme-danger-btn-hover-active-border-bg-color"
            )};`
          }\n      ${
            e("theme-danger-btn-hover-active-border-bg-color") &&
            `--ar-btn-hover-border-color: ${e(
              "theme-danger-btn-hover-active-border-bg-color"
            )};`
          }\n      ${
            e("theme-danger-btn-hover-active-border-bg-color") &&
            `--ar-btn-active-bg: ${e(
              "theme-danger-btn-hover-active-border-bg-color"
            )};`
          }\n      ${
            e("theme-danger-btn-hover-active-border-bg-color") &&
            `--ar-btn-active-border-color: ${e(
              "theme-danger-btn-hover-active-border-bg-color"
            )};`
          }\n      ${
            e("theme-danger") && `--ar-btn-disabled-bg: ${e("theme-danger")};`
          }\n      ${
            e("theme-danger") &&
            `--ar-btn-disabled-border-color: ${e("theme-danger")};`
          }\n    }\n    .btn-outline-primary {\n      ${
            e("theme-primary") && `--ar-btn-color: ${e("theme-primary")};`
          }\n      ${
            e("theme-primary") &&
            `--ar-btn-border-color: ${e("theme-primary")};`
          }\n      ${
            e("theme-primary") && `--ar-btn-hover-bg: ${e("theme-primary")};`
          }\n      ${
            e("theme-primary") &&
            `--ar-btn-hover-border-color: ${e("theme-primary")};`
          }\n      ${
            e("theme-primary") && `--ar-btn-active-bg: ${e("theme-primary")};`
          }\n      ${
            e("theme-primary") &&
            `--ar-btn-active-border-color: ${e("theme-primary")};`
          }\n      ${
            e("theme-primary") &&
            `--ar-btn-disabled-color: ${e("theme-primary")};`
          }\n      ${
            e("theme-primary") &&
            `--ar-btn-disabled-border-color: ${e("theme-primary")};`
          }\n    }\n    .btn-outline-warning {\n      ${
            e("theme-warning") && `--ar-btn-color: ${e("theme-warning")};`
          }\n      ${
            e("theme-warning") &&
            `--ar-btn-border-color: ${e("theme-warning")};`
          }\n      ${
            e("theme-warning") && `--ar-btn-hover-bg: ${e("theme-warning")};`
          }\n      ${
            e("theme-warning") &&
            `--ar-btn-hover-border-color: ${e("theme-warning")};`
          }\n      ${
            e("theme-warning") && `--ar-btn-active-bg: ${e("theme-warning")};`
          }\n      ${
            e("theme-warning") &&
            `--ar-btn-active-border-color: ${e("theme-warning")};`
          }\n      ${
            e("theme-warning") &&
            `--ar-btn-disabled-color: ${e("theme-warning")};`
          }\n      ${
            e("theme-warning") &&
            `--ar-btn-disabled-border-color: ${e("theme-warning")};`
          }\n    }\n    .btn-outline-info {\n      ${
            e("theme-info") && `--ar-btn-color: ${e("theme-info")};`
          }\n      ${
            e("theme-info") && `--ar-btn-border-color: ${e("theme-info")};`
          }\n      ${
            e("theme-info") && `--ar-btn-hover-bg: ${e("theme-info")};`
          }\n      ${
            e("theme-info") &&
            `--ar-btn-hover-border-color: ${e("theme-info")};`
          }\n      ${
            e("theme-info") && `--ar-btn-active-bg: ${e("theme-info")};`
          }\n      ${
            e("theme-info") &&
            `--ar-btn-active-border-color: ${e("theme-info")};`
          }\n      ${
            e("theme-info") && `--ar-btn-disabled-color: ${e("theme-info")};`
          }\n      ${
            e("theme-info") &&
            `--ar-btn-disabled-border-color: ${e("theme-info")};`
          }\n    }\n    .btn-outline-success {\n      ${
            e("theme-success") && `--ar-btn-color: ${e("theme-success")};`
          }\n      ${
            e("theme-success") &&
            `--ar-btn-border-color: ${e("theme-success")};`
          }\n      ${
            e("theme-success") && `--ar-btn-hover-bg: ${e("theme-success")};`
          }\n      ${
            e("theme-success") &&
            `--ar-btn-hover-border-color: ${e("theme-success")};`
          }\n      ${
            e("theme-success") && `--ar-btn-active-bg: ${e("theme-success")};`
          }\n      ${
            e("theme-success") &&
            `--ar-btn-active-border-color: ${e("theme-success")};`
          }\n      ${
            e("theme-success") &&
            `--ar-btn-disabled-color: ${e("theme-success")};`
          }\n      ${
            e("theme-success") &&
            `--ar-btn-disabled-border-color: ${e("theme-success")};`
          }\n    }\n    .btn-outline-danger {\n      ${
            e("theme-danger") && `--ar-btn-color: ${e("theme-danger")};`
          }\n      ${
            e("theme-danger") && `--ar-btn-border-color: ${e("theme-danger")};`
          }\n      ${
            e("theme-danger") && `--ar-btn-hover-bg: ${e("theme-danger")};`
          }\n      ${
            e("theme-danger") &&
            `--ar-btn-hover-border-color: ${e("theme-danger")};`
          }\n      ${
            e("theme-danger") && `--ar-btn-active-bg: ${e("theme-danger")};`
          }\n      ${
            e("theme-danger") &&
            `--ar-btn-active-border-color: ${e("theme-danger")};`
          }\n      ${
            e("theme-danger") &&
            `--ar-btn-disabled-color: ${e("theme-danger")};`
          }\n      ${
            e("theme-danger") &&
            `--ar-btn-disabled-border-color: ${e("theme-danger")};`
          }\n    }\n  `,
        a = o;
      a = o.replace(/null|\s*(?![A-Z])/g, "");
      t.append(a),
        a.split("}").map(function(e) {
          -1 !== e.indexOf("{--") && n.append(e + "}");
        });
      var i = {
        root: t.sheet.cssRules[0],
        primaryBtn: t.sheet.cssRules[1],
        warningBtn: t.sheet.cssRules[2],
        infoBtn: t.sheet.cssRules[3],
        successBtn: t.sheet.cssRules[4],
        dangerBtn: t.sheet.cssRules[5],
        primaryOutlineBtn: t.sheet.cssRules[6],
        warningOutlineBtn: t.sheet.cssRules[7],
        infoOutlineBtn: t.sheet.cssRules[8],
        successOutlineBtn: t.sheet.cssRules[9],
        dangerOutlineBtn: t.sheet.cssRules[10],
      };

      function b() {
        (n.innerHTML = i.root.cssText.replace(/null|\s*(?![A-Z])/g, "")),
        (n.innerHTML +=
          -1 === i.primaryBtn.cssText.indexOf("{ }") ?
          i.primaryBtn.cssText.replace(/ /g, "") :
          ""),
        (n.innerHTML +=
          -1 === i.warningBtn.cssText.indexOf("{ }") ?
          i.warningBtn.cssText.replace(/ /g, "") :
          ""),
        (n.innerHTML +=
          -1 === i.infoBtn.cssText.indexOf("{ }") ?
          i.infoBtn.cssText.replace(/ /g, "") :
          ""),
        (n.innerHTML +=
          -1 === i.successBtn.cssText.indexOf("{ }") ?
          i.successBtn.cssText.replace(/ /g, "") :
          ""),
        (n.innerHTML +=
          -1 === i.dangerBtn.cssText.indexOf("{ }") ?
          i.dangerBtn.cssText.replace(/ /g, "") :
          ""),
        (n.innerHTML +=
          -1 === i.primaryOutlineBtn.cssText.indexOf("{ }") ?
          i.primaryOutlineBtn.cssText.replace(/ /g, "") :
          ""),
        (n.innerHTML +=
          -1 === i.warningOutlineBtn.cssText.indexOf("{ }") ?
          i.warningOutlineBtn.cssText.replace(/ /g, "") :
          ""),
        (n.innerHTML +=
          -1 === i.infoOutlineBtn.cssText.indexOf("{ }") ?
          i.infoOutlineBtn.cssText.replace(/ /g, "") :
          ""),
        (n.innerHTML +=
          -1 === i.successOutlineBtn.cssText.indexOf("{ }") ?
          i.successOutlineBtn.cssText.replace(/ /g, "") :
          ""),
        (n.innerHTML +=
          -1 === i.dangerOutlineBtn.cssText.indexOf("{ }") ?
          i.dangerOutlineBtn.cssText.replace(/ /g, "") :
          "");
      }

      function s(e) {
        var r = 0,
          t = 0,
          n = 0;
        return (
          4 == e.length ?
          ((r = "0x" + e[1] + e[1]),
            (t = "0x" + e[2] + e[2]),
            (n = "0x" + e[3] + e[3])) :
          7 == e.length &&
          ((r = "0x" + e[1] + e[2]),
            (t = "0x" + e[3] + e[4]),
            (n = "0x" + e[5] + e[6])),
          +r + "," + +t + "," + +n
        );
      }

      function c(e, r) {
        var t = parseInt(e.replace("#", ""), 16),
          n = Math.round(2.55 * r),
          o = (t >> 16) + n,
          a = ((t >> 8) & 255) + n,
          i = (255 & t) + n;
        return (
          "#" +
          (
            16777216 +
            65536 * (o < 255 ? (o < 1 ? 0 : o) : 255) +
            256 * (a < 255 ? (a < 1 ? 0 : a) : 255) +
            (i < 255 ? (i < 1 ? 0 : i) : 255)
          )
          .toString(16)
          .slice(1)
        );
      }
      for (
        var l = document.querySelectorAll("#theme-colors .color-swatch"),
          d = 0; d < l.length; d++
      ) {
        var m = l[d].querySelector("label"),
          h = l[d].querySelector('input[type="color"]');
        (colorInput = l[d].querySelector('input[type="text"]')),
        (colorInput.value = e(l[d].id) || colorInput.value),
        (h.value = e(l[d].id) || h.value),
        (m.style.backgroundColor = e(l[d].id) || h.value),
        h.addEventListener("input", function(e) {
            var n = e.target.parentElement.querySelector("label"),
              o = e.target.parentElement.querySelector('input[type="text"]'),
              a = e.target.value;
            t.sheet.cssRules[d + 1];
            r("theme-" + e.target.id, a),
              r("theme-" + e.target.id + "-rgb", s(a)),
              r(
                "theme-" + e.target.id + "-btn-hover-active-border-bg-color",
                c(a, -10)
              ),
              (n.style.backgroundColor = a),
              (o.value = a),
              i.root.style.setProperty("--ar-" + e.target.id, a),
              i.root.style.setProperty("--ar-" + e.target.id + "-rgb", s(a)),
              i[e.target.id + "Btn"].style.setProperty("--ar-btn-bg", a),
              i[e.target.id + "Btn"].style.setProperty(
                "--ar-btn-border-color",
                a
              ),
              i[e.target.id + "Btn"].style.setProperty(
                "--ar-btn-hover-bg",
                c(a, -10)
              ),
              i[e.target.id + "Btn"].style.setProperty(
                "--ar-btn-hover-border-color",
                c(a, -10)
              ),
              i[e.target.id + "Btn"].style.setProperty(
                "--ar-btn-active-bg",
                c(a, -10)
              ),
              i[e.target.id + "Btn"].style.setProperty(
                "--ar-btn-active-border-color",
                c(a, -10)
              ),
              i[e.target.id + "Btn"].style.setProperty(
                "--ar-btn-disabled-bg",
                a
              ),
              i[e.target.id + "Btn"].style.setProperty(
                "--ar-btn-disabled-border-color",
                a
              ),
              i[e.target.id + "OutlineBtn"].style.setProperty(
                "--ar-btn-color",
                a
              ),
              i[e.target.id + "OutlineBtn"].style.setProperty(
                "--ar-btn-border-color",
                a
              ),
              i[e.target.id + "OutlineBtn"].style.setProperty(
                "--ar-btn-hover-bg",
                a
              ),
              i[e.target.id + "OutlineBtn"].style.setProperty(
                "--ar-btn-hover-border-color",
                a
              ),
              i[e.target.id + "OutlineBtn"].style.setProperty(
                "--ar-btn-active-bg",
                a
              ),
              i[e.target.id + "OutlineBtn"].style.setProperty(
                "--ar-btn-active-border-color",
                a
              ),
              i[e.target.id + "OutlineBtn"].style.setProperty(
                "--ar-btn-disabled-color",
                a
              ),
              i[e.target.id + "OutlineBtn"].style.setProperty(
                "--ar-btn-disabled-border-color",
                a
              ),
              "primary" === e.target.id &&
              (r("theme-link-hover-color", c(a, -10)),
                i.root.style.setProperty("--ar-link-color", a),
                i.root.style.setProperty("--ar-link-hover-color", c(a, -10))),
              b();
          }),
          colorInput.addEventListener("change", function(e) {
            var t = e.target.parentElement.querySelector("label"),
              n = e.target.parentElement.querySelector('input[type="color"]'),
              o = e.target.value;
            0 != o.length &&
              o.startsWith("#") &&
              (r("theme-" + n.id, o),
                r("theme-" + n.id + "-rgb", s(o)),
                r(
                  "theme-" + n.id + "-btn-hover-active-border-bg-color",
                  c(o, -10)
                ),
                (t.style.backgroundColor = o),
                (n.value = o),
                i.root.style.setProperty("--ar-" + n.id, o),
                i.root.style.setProperty("--ar-" + n.id + "-rgb", s(o)),
                i[n.id + "Btn"].style.setProperty("--ar-btn-bg", o),
                i[n.id + "Btn"].style.setProperty("--ar-btn-border-color", o),
                i[n.id + "Btn"].style.setProperty(
                  "--ar-btn-hover-bg",
                  c(o, -10)
                ),
                i[n.id + "Btn"].style.setProperty(
                  "--ar-btn-hover-border-color",
                  c(o, -10)
                ),
                i[n.id + "Btn"].style.setProperty(
                  "--ar-btn-active-bg",
                  c(o, -10)
                ),
                i[n.id + "Btn"].style.setProperty(
                  "--ar-btn-active-border-color",
                  c(o, -10)
                ),
                i[n.id + "Btn"].style.setProperty("--ar-btn-disabled-bg", o),
                i[n.id + "Btn"].style.setProperty(
                  "--ar-btn-disabled-border-color",
                  o
                ),
                i[n.id + "OutlineBtn"].style.setProperty("--ar-btn-color", o),
                i[n.id + "OutlineBtn"].style.setProperty(
                  "--ar-btn-border-color",
                  o
                ),
                i[n.id + "OutlineBtn"].style.setProperty(
                  "--ar-btn-hover-bg",
                  o
                ),
                i[n.id + "OutlineBtn"].style.setProperty(
                  "--ar-btn-hover-border-color",
                  o
                ),
                i[n.id + "OutlineBtn"].style.setProperty(
                  "--ar-btn-active-bg",
                  o
                ),
                i[n.id + "OutlineBtn"].style.setProperty(
                  "--ar-btn-active-border-color",
                  o
                ),
                i[n.id + "OutlineBtn"].style.setProperty(
                  "--ar-btn-disabled-color",
                  o
                ),
                i[n.id + "OutlineBtn"].style.setProperty(
                  "--ar-btn-disabled-border-color",
                  o
                ),
                "primary" === n.id &&
                (r("theme-link-hover-color", c(o, -10)),
                  i.root.style.setProperty("--ar-link-color", o),
                  i.root.style.setProperty("--ar-link-hover-color", c(o, -10))),
                b());
          });
      }
      var g = document.getElementById("font-url"),
        u = document.getElementById("google-font");
      (u.href = e("theme-font-url") || g.value),
      (g.value = e("theme-font-url") || g.value),
      g.addEventListener("blur", function(e) {
        var t = e.target.value;
        r("theme-font-url", t), (u.href = t);
      });
      var v = document.getElementById("body-font-family");
      (v.value = e("theme-font-family") || v.value),
      v.addEventListener("blur", function(e) {
        var t = e.target.value;
        r("theme-font-family", t),
          i.root.style.setProperty("--ar-body-font-family", t),
          b();
      });
      var $ = document.getElementById("root-font-size");
      ($.value = e("theme-root-font-size") || $.value),
      $.addEventListener("change", function(e) {
        var t = e.target.value;
        r("theme-root-font-size", t),
          i.root.style.setProperty("--ar-root-font-size", t),
          b();
      });
      var y = document.getElementById("body-font-size");
      (y.value = e("theme-body-font-size") || y.value),
      y.addEventListener("change", function(e) {
        var t = e.target.value;
        r("theme-body-font-size", t),
          i.root.style.setProperty("--ar-body-font-size", t),
          b();
      });
      var p = document.getElementById("border-width");
      (p.value = parseInt(e("theme-border-width")) || p.value),
      p.addEventListener("input", function(e) {
        var t = e.target.value;
        r("theme-border-width", t + "px"),
          i.root.style.setProperty("--ar-border-width", t + "px"),
          b();
      });
      var f = document.getElementById("border-radius");
      (f.value = parseFloat(e("theme-border-radius")) || f.value),
      f.addEventListener("input", function(e) {
        var t = e.target.value;
        r("theme-border-radius", t + "rem"),
          i.root.style.setProperty("--ar-border-radius", t + "rem"),
          b();
      });
      var B = document.querySelectorAll(
        '#theme-border-radiuses input[type="number"'
      );
      for (d = 0; d < B.length; d++)
        (B[d].value = e("theme-" + B[d].id + "multiplier") || B[d].value),
        B[d].addEventListener("input", function(e) {
          var t = e.target.value;
          r(
              "theme-" + e.target.id,
              "calc(var(--ar-border-radius) * " + t + ")"
            ),
            r("theme-" + e.target.id + "multiplier", t),
            i.root.style.setProperty(
              "--ar-" + e.target.id,
              "calc(var(--ar-border-radius) * " + t + ")"
            ),
            b();
        });
      var w = document.getElementById("customizer"),
        x = document.getElementById("customizer-btns");
      e("theme-customizer-btns") && x.classList.remove("d-none"),
        w.addEventListener("change", function(e) {
          r("theme-customizer-btns", !0), x.classList.remove("d-none");
        }),
        document
        .getElementById("customizer-reset-btn")
        .addEventListener("click", function() {
          for (var e = [], r = 0; r < localStorage.length; r++)
            "theme" == localStorage.key(r).substring(0, 5) &&
            e.push(localStorage.key(r));
          for (r = 0; r < e.length; r++) localStorage.removeItem(e[r]);
          window.location.reload();
        });
      var P = document.getElementById("copy-styles-btn");
      P.addEventListener("click", function() {
        var e = document.createRange();
        e.selectNode(n),
          window.getSelection().removeAllRanges(),
          window.getSelection().addRange(e),
          navigator.clipboard.writeText(n.innerHTML),
          (this.innerHTML = '<i class="ai-check me-2 ms-n1"></i>Copied!'),
          setTimeout(function() {
            P.innerHTML = '<i class="ai-copy me-2 ms-n1"></i>Copy styles';
          }, 2e3);
      });
    })();
  </script>
</body>

</html>