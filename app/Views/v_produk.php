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

  <!-- Import Google Font-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" id="google-font" />

  <!-- Vendor styles-->
  <link rel="stylesheet" media="screen" href="<?= base_url(); ?>/templates/assets/vendor/nouislider/dist/nouislider.min.css" />
  <link rel="stylesheet" media="screen" href="<?= base_url(); ?>/templates/assets/vendor/swiper/swiper-bundle.min.css" />

  <!-- Main Theme Styles + Bootstrap-->
  <link rel="stylesheet" media="screen" href="<?= base_url(); ?>/templates/assets/css/theme.min.css" />

  <!-- Main css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/templates/assets/css/main.css" />

  <!-- ICONS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

  <script>
    // Theme mode
    let mode = window.localStorage.getItem("mode"),
      root = document.getElementsByTagName("html")[0];
    if (mode !== undefined && mode === "dark") {
      root.classList.add("dark-mode");
    } else {
      root.classList.remove("dark-mode");
    }
  </script>

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
  <!-- <div class="page-loading active">
    <div class="page-loading-inner">
      <div class="page-spinner"></div>
      <span>Loading...</span>
    </div>
  </div> -->
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
  <!-- Customizer toggler--><a class="position-fixed top-50 bg-light text-dark fw-medium border rounded-pill shadow text-decoration-none" href="#customizer" data-bs-toggle="offcanvas" style="
        right: -1.75rem;
        margin-top: -1rem;
        padding: 0.25rem 0.75rem;
        transform: rotate(-90deg);
        font-size: calc(var(--ar-body-font-size) * 0.8125);
        letter-spacing: 0.075rem;
        z-index: 1030;
      "><i class="bi bi-gear text-primary fs-base me-1 ms-n1"></i>Customize</a>
  <!-- Customizer offcanvas-->
  <div class="offcanvas offcanvas-end" id="customizer" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1">
    <div class="offcanvas-header border-bottom">
      <h4 class="offcanvas-title">Customize theme</h4>
      <button class="btn-close" type="button" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      <div class="d-flex align-items-center mb-3">
        <i class="ai-paint-roll text-muted fs-4 me-2"></i>
        <h5 class="mb-0">Colors</h5>
      </div>
      <div class="row row-cols-3 g-3 mb-5" id="theme-colors">
        <div class="col">
          <div class="text-dark fs-sm fw-medium mb-2">Primary</div>
          <div class="color-swatch" id="theme-primary" data-color-labels='["theme-primary", "primary", "primary-rgb"]'>
            <label class="ratio ratio-4x3 border rounded-1 cursor-pointer mb-1" for="primary" style="background-color: #448c74" role="button"></label>
            <input class="form-control form-control-sm" type="text" value="#448c74" />
            <input class="visually-hidden" type="color" id="primary" value="#448c74" />
          </div>
        </div>
        <div class="col">
          <div class="text-dark fs-sm fw-medium mb-2">Warning</div>
          <div class="color-swatch" id="theme-warning" data-color-labels='["theme-warning", "warning", "warning-rgb"]'>
            <label class="ratio ratio-4x3 border rounded-1 cursor-pointer mb-1" for="warning" style="background-color: #edcb50" role="button"></label>
            <input class="form-control form-control-sm" type="text" value="#edcb50" />
            <input class="visually-hidden" type="color" id="warning" value="#edcb50" />
          </div>
        </div>
        <div class="col">
          <div class="text-dark fs-sm fw-medium mb-2">Info</div>
          <div class="color-swatch" id="theme-info" data-color-labels='["theme-info", "info", "info-rgb"]'>
            <label class="ratio ratio-4x3 border rounded-1 cursor-pointer mb-1" for="info" style="background-color: #3f7fca" role="button"></label>
            <input class="form-control form-control-sm" type="text" value="#3f7fca" />
            <input class="visually-hidden" type="color" id="info" value="#3f7fca" />
          </div>
        </div>
        <div class="col">
          <div class="text-dark fs-sm fw-medium pt-1 mb-2">Success</div>
          <div class="color-swatch" id="theme-success" data-color-labels='["theme-success", "success", "success-rgb"]'>
            <label class="ratio ratio-4x3 border rounded-1 cursor-pointer mb-1" for="success" style="background-color: #3fca90" role="button"></label>
            <input class="form-control form-control-sm" type="text" value="#3fca90" />
            <input class="visually-hidden" type="color" id="success" value="#3fca90" />
          </div>
        </div>
        <div class="col">
          <div class="text-dark fs-sm fw-medium pt-1 mb-2">Danger</div>
          <div class="color-swatch" id="theme-danger" data-color-labels='["theme-danger", "danger", "danger-rgb"]'>
            <label class="ratio ratio-4x3 border rounded-1 cursor-pointer mb-1" for="danger" style="background-color: #ed5050" role="button"></label>
            <input class="form-control form-control-sm" type="text" value="#ed5050" />
            <input class="visually-hidden" type="color" id="danger" value="#ed5050" />
          </div>
        </div>
      </div>
      <div class="d-flex align-items-center mb-3">
        <i class="ai-align-left text-muted fs-4 me-2"></i>
        <h5 class="mb-0">
          Typography
          <span class="text-muted fs-sm fw-normal">(1rem = 16px)</span>
        </h5>
      </div>
      <div class="mb-5">
        <div class="mb-3">
          <label class="text-dark fs-sm fw-medium pt-1 mb-2" for="font-url">Google font URL</label>
          <input class="form-control" type="url" value="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" id="font-url" />
        </div>
        <div class="mb-3">
          <label class="text-dark fs-sm fw-medium pt-1 mb-2" for="body-font-family">Font family</label>
          <input class="form-control" type="text" value="'Inter', sans-serif" id="body-font-family" />
        </div>
        <div class="row row-cols-2">
          <div class="col mb-3">
            <label class="d-flex w-100 text-dark fs-sm fw-medium pt-1 mb-2" for="root-font-size">Root font size, rem</label>
            <select class="form-select" id="root-font-size">
              <option value=".75rem">.75</option>
              <option value=".875rem">.875</option>
              <option value="1rem" selected>1</option>
              <option value="1.05rem">1.05</option>
              <option value="1.1rem">1.1</option>
              <option value="1.15rem">1.15</option>
              <option value="1.25rem">1.25</option>
              <option value="1.375rem">1.375</option>
            </select>
          </div>
          <div class="col mb-3">
            <label class="d-flex w-100 text-dark fs-sm fw-medium pt-1 mb-2" for="body-font-size">Body font size, rem</label>
            <select class="form-select" id="body-font-size">
              <option value=".75rem">.75</option>
              <option value=".875rem">.875</option>
              <option value="1rem" selected>1</option>
              <option value="1.15rem">1.15</option>
              <option value="1.25rem">1.25</option>
              <option value="1.375rem">1.375</option>
            </select>
          </div>
        </div>
      </div>
      <div class="d-flex align-items-center mt-n2 mb-3">
        <i class="ai-maximize text-muted fs-5 me-2"></i>
        <h5 class="mb-0">Borders / Rounding</h5>
      </div>
      <div class="mb-3">
        <label class="d-flex w-100 text-dark fs-sm fw-medium pt-1 mb-2" for="border-width">Border width, px</label>
        <input class="form-control" type="number" min="0" step="1" value="1" id="border-width" />
      </div>
      <div class="mb-3">
        <label class="d-flex w-100 text-dark fs-sm fw-medium pt-1 mb-2" for="border-radius">Rounded base, rem</label>
        <input class="form-control" type="number" min="0" step=".05" value="1" id="border-radius" />
      </div>
      <div id="theme-border-radiuses">
        <div class="mb-3">
          <label class="d-flex w-100 text-dark fs-sm fw-medium pt-1 mb-2" for="border-radius-sm">
            Rounded SM<span class="text-muted fw-normal ms-1">
              = Rounded base multiplied by</span></label>
          <input class="form-control" type="number" min="0" step=".05" value=".75" id="border-radius-sm" />
        </div>
        <div class="mb-3">
          <label class="d-flex w-100 text-dark fs-sm fw-medium pt-1 mb-2" for="border-radius-lg">
            Rounded LG<span class="text-muted fw-normal ms-1">
              = Rounded base multiplied by</span></label>
          <input class="form-control" type="number" min="0" step=".05" value="1.125" id="border-radius-lg" />
        </div>
        <div class="mb-3">
          <label class="d-flex w-100 text-dark fs-sm fw-medium pt-1 mb-2" for="border-radius-xl">
            Rounded XL<span class="text-muted fw-normal ms-1">
              = Rounded base multiplied by</span></label>
          <input class="form-control" type="number" min="0" step=".05" value="1.5" id="border-radius-xl" />
        </div>
        <div class="mb-3">
          <label class="d-flex w-100 text-dark fs-sm fw-medium pt-1 mb-2" for="border-radius-2xl">
            Rounded 2XL<span class="text-muted fw-normal ms-1">
              = Rounded base multiplied by</span></label>
          <input class="form-control" type="number" min="0" step=".05" value="2.25" id="border-radius-2xl" />
        </div>
      </div>
    </div>
    <div class="offcanvas-header border-top d-none" id="customizer-btns">
      <button class="btn btn-secondary w-100 me-3" type="button" id="customizer-reset-btn">
        <i class="ai-undo fs-lg me-2 ms-n1"></i>Reset
      </button>
      <button class="btn btn-primary w-100" type="button" data-bs-toggle="modal" data-bs-target="#customizer-modal">
        <i class="ai-code-curly fs-lg me-2 ms-n1"></i>Show styles
      </button>
    </div>
  </div>
  <!-- Page wrapper-->
  <main class="page-wrapper">
    <?= $this->include('assets/nav.php') ?>

    <!-- Page content-->
    <div class="container py-5 mt-5 mb-lg-4 mb-xl-5">
      <!-- Breadcrumb-->
      <nav aria-label="breadcrumb">
        <ol class="pt-lg-3 pb-2 breadcrumb">
          <li class="breadcrumb-item">
            <a href="templet.html">Beranda </a>
          </li>
          <svg width="12" height="12" fill="currentColor" class="bi bi-chevron-right mt-1 mx-3" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
          </svg>
          <li class="breadcrumb-item active">Katalog</li>
        </ol>
      </nav>
      <!-- Banner-->
      <div class="ignore-dark-mode rounded-1 overflow-hidden mb-5" style="background-color: #e3e5e9">
        <div class="row align-items-center g-0">
          <div class="col-md-6 offset-xl-1 text-center text-md-start">
            <div class="py-4 px-4 px-sm-5 pe-md-0 ps-xl-4">
              <p class="fs-xs text-uppercase pt-3 pt-md-0 mb-3 mb-lg-4">
                promo
              </p>
              <h2 class="h1 pb-2 pb-xl-3">
                Beli sekarang untuk dapat diskon.
                <span class="text-primary">Discount up to 40%</span>
              </h2>
              <a class="btn btn-sm btn-outline-dark ignore-dark-mode" href="#">Explore</a>
            </div>
          </div>
          <div class="col-md-6 col-xl-5 d-flex justify-content-end">
            <img src="<?= base_url(); ?>/templates/assets/img/shop/banner.png" width="491" alt="Banner" />
          </div>
        </div>
      </div>
      <!-- Page title-->
      <div class="row pt-xl-3 mt-n1 mt-sm-0">
        <div class="col-lg-9 offset-lg-3 pt-lg-3">
          <h1 class="pb-2 pb-sm-3" id="textChange">Daftar Laptop</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-9 offset-lg-3">
          <form class=" d-flex justify-content-end w-50 navbar-search" method="post" action="">
            <?= csrf_field(); ?>
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." name="cari" id="cari" value="<?= isset($_POST['cari']) ? $_POST['cari'] : "" ?>">
            </div>
          </form>
        </div>
      </div>

      <br>

      <div class="row pb-2 pb-sm-4">
        <!-- Sidebar (offcanvas on sreens < 992px)-->
        <aside class="col-lg-3">
          <div class="offcanvas-lg offcanvas-start" id="shopSidebar">
            <div class="offcanvas-body pt-2 pt-lg-0 pe-lg-4">
              <!-- Categories (accordion with checkboxes)-->
              <h3 class="h5">Filter Produk</h3>
              <div class="accordion accordion-alt pb-2 mb-4" id="shopCategories">
                <!-- BRAND -->
                <div class="accordion-item mb-0">
                  <h4 class="accordion-header">
                    <button class="accordion-button fs-xl fw-medium py-2" type="button" data-bs-toggle="collapse" data-bs-target="#livingRoom" aria-expanded="true" aria-controls="livingRoom">
                      <span class="fs-base">Brand</span>
                    </button>
                  </h4>
                  <div class="accordion-collapse collapse show" id="livingRoom" data-bs-parent="#shopCategories">
                    <div class="accordion-body py-1 mb-1">
                      <!-- Brands -->
                      <?php

                      foreach ($brands as $key => $value) : ?>

                        <div class='form-check'>
                          <input class='form-check-input product_check' type='checkbox' id='nama_brand' value="<?= $value->nama_brand; ?>" />
                          <label class='form-check-label d-flex align-items-center' for='lr-all'>
                            <span class='text-nav fw-medium'><?= $value->nama_brand; ?></span>
                            <!-- <span class='fs-xs text-muted ms-auto'>rong Temu</span> -->
                          </label>
                        </div>

                      <?php endforeach; ?>

                    </div>
                  </div>
                </div>

                <!-- KATEGORI -->
                <div class="accordion-item mb-0">
                  <h4 class="accordion-header">
                    <button class="accordion-button collapsed fs-xl fw-medium py-2" type="button" data-bs-toggle="collapse" data-bs-target="#categories" aria-expanded="false" aria-controls="categories">
                      <span class="fs-base">Kategori</span>
                    </button>
                  </h4>
                  <div class="accordion-collapse collapse" id="categories" data-bs-parent="#shopCategories">
                    <div class="accordion-body py-1 mb-1">
                      <!-- Kategori -->
                      <?php
                      foreach ($kategori as $key => $value) :

                      ?>


                        <div class='form-check'>
                          <input class='form-check-input product_check' type='checkbox' id='kategori' value="<?= $value->kategori; ?>" />
                          <label class='form-check-label d-flex align-items-center' for='lr-all'>
                            <span class='text-nav fw-medium'><?= $value->kategori; ?></span>
                            <!-- <span class='fs-xs text-muted ms-auto'>rong Temu</span> -->
                          </label>
                        </div>

                      <?php endforeach; ?>

                    </div>
                  </div>
                </div>

                <!-- RAM -->
                <div class="accordion-item mb-0">
                  <h4 class="accordion-header">
                    <button class="accordion-button collapsed fs-xl fw-medium py-2" type="button" data-bs-toggle="collapse" data-bs-target="#kitchen" aria-expanded="false" aria-controls="kitchen">
                      <span class="fs-base">RAM</span>
                    </button>
                  </h4>
                  <div class="accordion-collapse collapse" id="kitchen" data-bs-parent="#shopCategories">
                    <div class="accordion-body py-1 mb-1">

                      <?php

                      foreach ($ramos as $key => $value) :
                      ?>


                        <div class='form-check'>
                          <input class='form-check-input product_check' type='checkbox' id='nama_ram' value="<?= $value->nama_ram; ?>" />
                          <label class='form-check-label d-flex align-items-center' for='lr-all'>
                            <span class='text-nav fw-medium'><?= $value->nama_ram; ?></span>
                            <!-- <span class='fs-xs text-muted ms-auto'>rong Temu</span> -->
                          </label>
                        </div>

                      <?php endforeach; ?>

                    </div>
                  </div>
                </div>

                <div class="accordion-item mb-0">
                  <h4 class="accordion-header">
                    <button class="accordion-button collapsed fs-xl fw-medium py-2" type="button" data-bs-toggle="collapse" data-bs-target="#tipeRam" aria-expanded="false" aria-controls="tipeRam">
                      <span class="fs-base">Tipe RAM</span>
                    </button>
                  </h4>
                  <div class="accordion-collapse collapse" id="tipeRam" data-bs-parent="#shopCategories">
                    <div class="accordion-body py-1 mb-1">

                      <?php

                      foreach ($tiperam as $key => $value) :
                      ?>


                        <div class='form-check'>
                          <input class='form-check-input product_check' type='checkbox' id='tipe_ram' value="<?= $value->tipe_ram; ?>" />
                          <label class='form-check-label d-flex align-items-center' for='lr-all'>
                            <span class='text-nav fw-medium'><?= $value->tipe_ram; ?></span>
                            <!-- <span class='fs-xs text-muted ms-auto'>rong Temu</span> -->
                          </label>
                        </div>

                      <?php endforeach; ?>

                    </div>
                  </div>
                </div>

                <div class="accordion-item mb-0">
                  <h4 class="accordion-header">
                    <button class="accordion-button collapsed fs-xl fw-medium py-2" type="button" data-bs-toggle="collapse" data-bs-target="#storage" aria-expanded="false" aria-controls="storage">
                      <span class="fs-base">Storage</span>
                    </button>
                  </h4>
                  <div class="accordion-collapse collapse" id="storage" data-bs-parent="#shopCategories">
                    <div class="accordion-body py-1 mb-1">
                      <?php

                      foreach ($ramos as $key => $value) :
                      ?>


                        <div class='form-check'>
                          <input class='form-check-input product_check' type='checkbox' id='hdd' value="<?= $value->hdd; ?>" />
                          <label class='form-check-label d-flex align-items-center' for='lr-all'>
                            <span class='text-nav fw-medium'><?= $value->hdd; ?></span>
                            <!-- <span class='fs-xs text-muted ms-auto'>rong Temu</span> -->
                          </label>
                        </div>

                      <?php endforeach ?>
                    </div>
                  </div>
                </div>

                <div class="accordion-item mb-0">
                  <h4 class="accordion-header">
                    <button class="accordion-button collapsed fs-xl fw-medium py-2" type="button" data-bs-toggle="collapse" data-bs-target="#prosessor" aria-expanded="false" aria-controls="prosessor">
                      <span class="fs-base">CPU</span>
                    </button>
                  </h4>
                  <div class="accordion-collapse collapse" id="prosessor" data-bs-parent="#shopCategories">
                    <div class="accordion-body py-1 mb-1">
                      <?php

                      foreach ($cpulayar as $key => $value) :
                      ?>


                        <div class='form-check'>
                          <input class='form-check-input product_check' type='checkbox' id='cpu' value="<?= $value->cpu; ?>" />
                          <label class='form-check-label d-flex align-items-center' for='lr-all'>
                            <span class='text-nav fw-medium'><?= $value->cpu; ?></span>
                            <!-- <span class='fs-xs text-muted ms-auto'>rong Temu</span> -->
                          </label>
                        </div>

                      <?php endforeach; ?>
                    </div>
                  </div>
                </div>

                <div class="accordion-item mb-0">
                  <h4 class="accordion-header">
                    <button class="accordion-button collapsed fs-xl fw-medium py-2" type="button" data-bs-toggle="collapse" data-bs-target="#ukuranLayar" aria-expanded="false" aria-controls="ukuranLayar">
                      <span class="fs-base">Ukuran Layar</span>
                    </button>
                  </h4>
                  <div class="accordion-collapse collapse" id="ukuranLayar" data-bs-parent="#shopCategories">
                    <div class="accordion-body py-1 mb-1">
                      <?php

                      foreach ($cpulayar as $key => $value) :
                      ?>


                        <div class='form-check'>
                          <input class='form-check-input product_check' type='checkbox' id='uk_layar' value="<?= $value->uk_layar; ?>" />
                          <label class='form-check-label d-flex align-items-center' for='lr-all'>
                            <span class='text-nav fw-medium'><?= $value->uk_layar; ?>"</span>
                            <!-- <span class='fs-xs text-muted ms-auto'>rong Temu</span> -->
                          </label>
                        </div>

                      <?php endforeach; ?>
                    </div>
                  </div>
                </div>

                <div class="accordion-item mb-0">
                  <h4 class="accordion-header">
                    <button class="accordion-button collapsed fs-xl fw-medium py-2" type="button" data-bs-toggle="collapse" data-bs-target="#sistemOperasi" aria-expanded="false" aria-controls="sistemOperasi">
                      <span class="fs-base">Sistem Operasi</span>
                    </button>
                  </h4>
                  <div class="accordion-collapse collapse" id="sistemOperasi" data-bs-parent="#shopCategories">
                    <div class="accordion-body py-1 mb-1">
                      <?php

                      foreach ($ramos as $key => $value) :
                      ?>


                        <div class='form-check'>
                          <input class='form-check-input product_check' type='checkbox' id='os' value="<?= $value->os; ?>" />
                          <label class='form-check-label d-flex align-items-center' for='lr-all'>
                            <span class='text-nav fw-medium'><?= $value->os; ?></span>
                            <!-- <span class='fs-xs text-muted ms-auto'>rong Temu</span> -->
                          </label>
                        </div>

                      <?php endforeach; ?>
                    </div>
                  </div>
                </div>

                <br>

                <!-- HARGA-->
                <!-- <h3 class="h5">Harga</h3>
                <form action="/Produk/" method="post" class="d-block">
                  <div class="row">
                    <div class="col-md-6 text-center">
                      <label for="range">Harga Awal</label>
                      <input type="number" name="min_harga" class="form-control mt-2">
                    </div>
                    <div class="col-md-6 text-center">
                      <label for="">Harga Akhir</label>
                      <input type="number" name="max_harga" class="form-control mt-2">
                    </div>
                    <div class="col-md-12 text-center mt-3 d-grid">
                      <button type="submit" class="btn btn-primary">Filter</button>
                    </div>
                  </div>
                </form> -->


              </div>
            </div>
        </aside>

        <!-- Product grid-->
        <div class="col-lg-9">
          <!-- Active filters + Sorting-->

          <div class="row g-4">
            <div class="text-center">
              <p id="loader" style="display: none;">Loading...</p>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3" id="result">
              <!-- Item 1-->
              <?php
              // $sort_option = "";
              // if (isset($_GET['harga_awal']) && isset($_GET['harga_akhir'])) {
              //   $harga_awal = $_GET['harga_awal'];
              //   $harga_akhir = $_GET['harga_akhir'];

              //   $query = "SELECT * FROM produk WHERE harga BETWEEN $harga_awal AND $harga_akhir ORDER BY harga ASC";
              // } else if (isset($_GET['sort_numeric'])) {
              //   if ($_GET['sort_numeric'] == "low-high") {
              //     $sort_option = "ASC";
              //   } else if ($_GET['sort_numeric'] == "high-low") {
              //     $sort_option = "DESC";
              //   }
              //   $query = "SELECT * FROM produk ORDER BY harga $sort_option";
              // } else if (isset($_GET['sort_alphabet'])) {
              //   if ($_GET['sort_alphabet'] == "a-z") {
              //     $sort_option = "ASC";
              //   } else if ($_GET['sort_alphabet'] == "z-a") {
              //     $sort_option = "DESC";
              //   }
              //   $query = "SELECT * FROM produk ORDER BY nama $sort_option";
              // } else {
              //   $query = "SELECT * FROM produk";
              // }

              $no = 1;
              foreach ($product as $key => $value) {
                $n = $no++;
              ?>

                <div class="col pb-2 pb-sm-3">
                  <div class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
                    <span class="badge bg-faded-danger text-danger position-absolute top-0 start-0 mt-3 ms-3">Sale</span>
                    <a class="swiper-wrapper" href="/Produk/detail/<?= $value['id']; ?>">
                      <div class="swiper-slide p-2 p-xl-4">
                        <img class="d-block mx-auto" src="<?= base_url() ?>/templates/<?= $value['gambar']; ?>" width="226" alt="Product" />
                      </div>
                    </a>
                    <h3 class="h6 mb-2 fw-light"><?= $value['uk_layar']; ?>"</h3>
                    <div class="d-flex mb-1">
                      <h3 class="h6 mb-0">
                        <a href="shop-single.html" style="color: #18d26e" class="text-uppercase"><?= $value['nama']; ?></a>
                      </h3>
                    </div>

                    <div class="d-flex align-items-center">
                      <span class="fw-semibold">Harga : Rp. <?= number_format($value['harga']); ?></span>
                      <div class="nav ms-auto" data-bs-toggle="tooltip" data-bs-template='&lt;div class="tooltip fs-xs"&gt;&lt;div class="tooltip-inner bg-light text-muted p-0"&gt;&lt;/div&gt;&lt;/div&gt;' data-bs-placement="left" title="Add to cart">
                        <a class="nav-link fs-lg py-2 px-1" href="#"><i class="bi bi-cart"></i></a>
                      </div>
                    </div>
                    <ul class="ms-n3">
                      <li>
                        <h6 class="fw-semibold"><?= $value['os']; ?></h6>
                      </li>
                      <li>
                        <h6 class="fw-semibold"><?= $value['desk_cpu']; ?></h6>
                      </li>
                      <li>
                        <h6 class="fw-semibold"><?= $value['gpu']; ?></h6>
                      </li>
                      <li>
                        <h6 class="fw-semibold"><?= $value['nama_ram']; ?> <?= $value['tipe_ram']; ?></h6>
                      </li>
                      <li>
                        <h6 class="fw-semibold"><?= $value['hdd']; ?></h6>
                      </li>
                    </ul>

                  </div>
                </div>

              <?php } ?>
            </div>
            <?= $pager->links('product', 'bootstrap_pagination') ?>
          </div>
        </div>


        <?= $this->include('assets/footer.php') ?>