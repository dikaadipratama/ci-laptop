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
  <link rel="stylesheet" media="screen" href="<?= base_url(); ?>/templates/assets/vendor/aos/dist/aos.css" />
  <link rel="stylesheet" media="screen" href="<?= base_url(); ?>/templates/assets/vendor/img-comparison-slider/dist/styles.css" />
  <!-- ICONS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

  <!-- Main Theme Styles + Bootstrap-->
  <link rel="stylesheet" media="screen" href="<?= base_url(); ?>/templates/assets/css/theme.min.css" />

  <!-- Main css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/templates/assets/css/main.css" />

  <!-- ICONS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css" integrity="sha512-gMjQeDaELJ0ryCI+FtItusU9MkAifCZcGq789FrzkiM49D8lbDhoaUaIX4ASU187wofMNlgBJ4ckbrXM9sE6Pg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Customizer generated styles-->
  <style id="customizer-styles"></style>
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
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-files me-2 ms-n1" viewBox="0 0 16 16">
              <path d="M13 0H6a2 2 0 0 0-2 2 2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 13V4a2 2 0 0 0-2-2H5a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1zM3 4a1 1 0 0 1 1-1h7a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4z" />
            </svg>
            Copy styles
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Customizer toggler-->
  <a class="position-fixed top-50 bg-light text-dark fw-medium border rounded-pill shadow text-decoration-none" href="#customizer" data-bs-toggle="offcanvas" style="
        right: -1.75rem;
        margin-top: -1rem;
        padding: 0.25rem 0.75rem;
        transform: rotate(-90deg);
        font-size: calc(var(--ar-body-font-size) * 0.8125);
        letter-spacing: 0.075rem;
        z-index: 1030;
      ">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#27dda0" class="bi bi-gear" viewBox="0 0 16 16">
      <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
      <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
    </svg>
    Customize</a>

  <!-- Customizer offcanvas-->
  <div class="offcanvas offcanvas-end" id="customizer" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1">
    <div class="offcanvas-header border-bottom">
      <h4 class="offcanvas-title">Customize theme</h4>
      <button class="btn-close" type="button" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      <div class="d-flex align-items-center mb-3">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-palette text-muted fs-4 me-2" viewBox="0 0 16 16">
          <path d="M8 5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm4 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM5.5 7a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm.5 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
          <path d="M16 8c0 3.15-1.866 2.585-3.567 2.07C11.42 9.763 10.465 9.473 10 10c-.603.683-.475 1.819-.351 2.92C9.826 14.495 9.996 16 8 16a8 8 0 1 1 8-8zm-8 7c.611 0 .654-.171.655-.176.078-.146.124-.464.07-1.119-.014-.168-.037-.37-.061-.591-.052-.464-.112-1.005-.118-1.462-.01-.707.083-1.61.704-2.314.369-.417.845-.578 1.272-.618.404-.038.812.026 1.16.104.343.077.702.186 1.025.284l.028.008c.346.105.658.199.953.266.653.148.904.083.991.024C14.717 9.38 15 9.161 15 8a7 7 0 1 0-7 7z" />
        </svg>
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
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-text-left text-muted fs-4 me-2" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
        </svg>
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
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fullscreen text-muted fs-5 me-2" viewBox="0 0 16 16">
          <path d="M1.5 1a.5.5 0 0 0-.5.5v4a.5.5 0 0 1-1 0v-4A1.5 1.5 0 0 1 1.5 0h4a.5.5 0 0 1 0 1h-4zM10 .5a.5.5 0 0 1 .5-.5h4A1.5 1.5 0 0 1 16 1.5v4a.5.5 0 0 1-1 0v-4a.5.5 0 0 0-.5-.5h-4a.5.5 0 0 1-.5-.5zM.5 10a.5.5 0 0 1 .5.5v4a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 0 14.5v-4a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v4a1.5 1.5 0 0 1-1.5 1.5h-4a.5.5 0 0 1 0-1h4a.5.5 0 0 0 .5-.5v-4a.5.5 0 0 1 .5-.5z" />
        </svg>
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
        Reset
      </button>
      <button class="btn btn-primary w-100" type="button" data-bs-toggle="modal" data-bs-target="#customizer-modal">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-braces fs-lg me-2 ms-n1" viewBox="0 0 16 16">
          <path d="M2.114 8.063V7.9c1.005-.102 1.497-.615 1.497-1.6V4.503c0-1.094.39-1.538 1.354-1.538h.273V2h-.376C3.25 2 2.49 2.759 2.49 4.352v1.524c0 1.094-.376 1.456-1.49 1.456v1.299c1.114 0 1.49.362 1.49 1.456v1.524c0 1.593.759 2.352 2.372 2.352h.376v-.964h-.273c-.964 0-1.354-.444-1.354-1.538V9.663c0-.984-.492-1.497-1.497-1.6zM13.886 7.9v.163c-1.005.103-1.497.616-1.497 1.6v1.798c0 1.094-.39 1.538-1.354 1.538h-.273v.964h.376c1.613 0 2.372-.759 2.372-2.352v-1.524c0-1.094.376-1.456 1.49-1.456V7.332c-1.114 0-1.49-.362-1.49-1.456V4.352C13.51 2.759 12.75 2 11.138 2h-.376v.964h.273c.964 0 1.354.444 1.354 1.538V6.3c0 .984.492 1.497 1.497 1.6z" />
        </svg>
        Styles
      </button>
    </div>
  </div>