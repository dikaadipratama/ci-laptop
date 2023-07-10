<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Filter extends BaseController
{
  public function index()
  {
    if ($this->request->getPost()) {
      $sql = "SELECT * FROM produk WHERE brand != '' ";
      // if (isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"])) {
      //   $sql .= "AND harga BETWEEN '" . $_POST["minimum_price"] . "' AND '" . $_POST["maximum_price"] . "'";
      // }

      if (isset($_POST["brand"])) {
        $brand_filter = implode("','", $_POST["brand"]);
        $sql .= " AND brand IN('" . $brand_filter . "')";
      }
      if (isset($_POST["kategori"])) {
        $kategori_filter = implode("','", $_POST["kategori"]);
        $sql .= " AND kategori IN('" . $kategori_filter . "')";
      }
      if (isset($_POST["nama_ram"])) {
        $nama_ram_filter = implode("','", $_POST["nama_ram"]);
        $sql .= " AND nama_ram IN('" . $nama_ram_filter . "')";
      }
      if (isset($_POST["tipe_ram"])) {
        $tipe_ram_filter = implode("','", $_POST["tipe_ram"]);
        $sql .= " AND tipe_ram IN('" . $tipe_ram_filter . "')";
      }
      if (isset($_POST["hdd"])) {
        $hdd_filter = implode("','", $_POST["hdd"]);
        $sql .= " AND hdd IN('" . $hdd_filter . "')";
      }
      if (isset($_POST["cpu"])) {
        $cpu_filter = implode("','", $_POST["cpu"]);
        $sql .= " AND cpu IN('" . $cpu_filter . "')";
      }
      if (isset($_POST["uk_layar"])) {
        $uk_layar_filter = implode("','", $_POST["uk_layar"]);
        $sql .= " AND uk_layar IN('" . $uk_layar_filter . "')";
      }
      if (isset($_POST["os"])) {
        $os_filter = implode("','", $_POST["os"]);
        $sql .= " AND os IN('" . $os_filter . "')";
      }

      // $result = mysqli_query($con, $sql);
      $output = '';
      $db = db_connect();
      $result = $db->query($sql)->getResultArray();

      //   exit(json_encode($result));

      if ($result) {
        foreach ($result as $key => $row) {
          $output .= '        <div class="col pb-2 pb-sm-3">
    <div class="card-hover position-relative bg-secondary rounded-1 p-3 mb-4">
      <span class="badge bg-faded-danger text-danger position-absolute top-0 start-0 mt-3 ms-3">Sale</span>
      <a class="swiper-wrapper" href="shop-single.html">
        <div class="swiper-slide p-2 p-xl-4">
          <img class="d-block mx-auto" src="' . base_url('templates/' . $row['gambar']) . '" width="226" alt="Product" />
        </div>
      </a>
      <h3 class="h6 mb-2 fw-light">' . $row['uk_layar'] . '</h3>
      <div class="d-flex mb-1">
        <h3 class="h6 mb-0">
          <a href="shop-single.html" class="text-uppercase">' . $row['nama'] . '</a>
        </h3>
      </div>
      <div class="d-flex align-items-center">
        <span class="fw-semibold">Harga : ' . number_format($row['harga']) . '</span>
        <div class="nav ms-auto" data-bs-toggle="tooltip" data-bs-template="&lt;div class="tooltip fs-xs"&gt;&lt;div class="tooltip-inner bg-light text-muted p-0"&gt;&lt;/div&gt;&lt;/div&gt;" data-bs-placement="left" title="Add to cart">
          <a class="nav-link fs-lg py-2 px-1" href="#"><i class="bi bi-cart"></i></a>
        </div>
      </div>
      <ul class="ms-n3">
        <li>
          <h6 class="fw-semibold">' . $row['os'] . '</h6>
        </li>
        <li>
          <h6 class="fw-semibold">' . $row['desk_cpu'] . '</h6>
        </li>
        <li>
          <h6 class="fw-semibold">' . $row['gpu'] . '</h6>
        </li>
        <li>
          <h6 class="fw-semibold">' . $row['nama_ram'] . ' ' . $row['tipe_ram'] . '</h6>
        </li>
        <li>
          <h6 class="fw-semibold">' . $row['hdd'] . '</h6>
        </li>
      </ul>
    </div>
  </div>';
        }
      } else {
        $output = '<h3 class="fw-semibold>Data Tidak Ada</h3>';
      }
      echo json_encode($output);
    }
  }
}
