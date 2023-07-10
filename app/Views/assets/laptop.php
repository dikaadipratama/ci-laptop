<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" /> -->

<?php

$no = 1;
foreach ($laptop as $key => $value) {
  $n = $no++
?>

  <div class="col pb-2 pb-sm-3">
    <div class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
      <span class="badge bg-faded-danger text-danger position-absolute top-0 start-0 mt-3 ms-3"><?= $value['kategori']; ?></span>
      <span class="badge bg-faded-danger text-danger position-absolute top-0 end-0 mt-3 me-3"><i class="fa fa-star"></i> <?= round($value['ranting'], 1); ?></span>

      <a class="swiper-wrapper" href="/Produk/detail/<?= $value['id']; ?>">
        <div class="swiper-slide p-2 p-xl-4">
          <img class="d-block mx-auto" src="<?= base_url() ?>/Templates/<?= $value['gambar']; ?>" width="226" alt="Product" />
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