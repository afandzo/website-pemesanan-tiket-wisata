<?php 
include "db.php";
if (isset($_POST['pesan']))  {
  $muatan = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $random = "INV-" . substr(str_shuffle($muatan), 0, 7);
  $queryPemesanan = "SELECT * FROM pemesanan";
  $execPemesanan = mysqli_query($conn, $queryPemesanan);
  $dataPemesanan = mysqli_fetch_array($execPemesanan, MYSQLI_ASSOC);
  $nama_pemesan = $_POST['pemesan'];
  $no_identitas = $_POST['identitas'];
  $no_tlp = $_POST['tlp'];
  $wisata = $_POST['nama_wisata'];
  $tanggal = $_POST['tgl'];
  $dewasa = $_POST['dewasa'];
  $anak = $_POST['anak'];
  $total_harga = $_POST['harga'];
  $sql = "INSERT INTO `pemesanan` (`id`, `kode`, `nama_pemesan`, `no_identitas`, `no_tlp`, `tempat_wisata`, `tanggal_kunjungan`, `pdewasa`, `panak`, `total_harga`) VALUES (NULL, '$random', '$nama_pemesan', '$no_identitas', '$no_tlp', '$wisata', '$tanggal', '$dewasa', '$anak', '$total_harga');";
  // var_dump($kode);
  $coba = mysqli_query($conn, $sql);
//   var_dump($dataPemesanan);
  // if ($coba) {
  //   header("location:pesan.php");
  // }
  $gagal = "";
  if ($coba) {
    echo "";
  }else {
      $gagal = "Pemesanan Gagal. Harap isi semua inputan";
      $random = "GAGAL!!!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS here -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
  <link rel="stylesheet" href="assets/css/flaticon.css" />
  <link rel="stylesheet" href="assets/css/slicknav.css" />
  <link rel="stylesheet" href="assets/css/animate.min.css" />
  <link rel="stylesheet" href="assets/css/magnific-popup.css" />
  <link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />
  <link rel="stylesheet" href="assets/css/themify-icons.css" />
  <link rel="stylesheet" href="assets/css/slick.css" />
  <link rel="stylesheet" href="assets/css/nice-select.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<title>Kode</title>
</head>

<body>
  <!-- Preloader Start -->
  <div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
      <div class="preloader-inner position-relative">
        <div class="preloader-circle"></div>
        <div class="preloader-img pere-text">
          <img src="assets/img/logo/logo.png" alt="" />
        </div>
      </div>
    </div>
  </div>
  <!-- Preloader Start -->
  <header>
    <!-- Header Start -->
    <div class="header-area">
      <div class="main-header">
        <div class="header-top top-bg d-none d-lg-block">
          <div class="container">
            <div class="row justify-content-between align-items-center">
              <div class="col-lg-8">
                <div class="header-info-left">
                  <ul>
                    <li>gotrip</li>
                    <li>666 569 025077</li>
                    <li>karanganyar</li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="header-info-right f-right">
                  <ul class="header-social">
                    <li>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="header-bottom header-sticky">
          <div class="container">
            <div class="row align-items-center">
              <!-- Logo -->
              <div class="col-xl-2 col-lg-2 col-md-1">
                <div class="logo">
                  <a href="index.html"><img src="assets/img/logo/logo.png" alt="" /></a>
                </div>
              </div>
              <div class="col-xl-10 col-lg-10 col-md-10">
                <!-- Main-menu -->
                <div class="main-menu f-right d-none d-lg-block">
                  <nav>
                    <ul id="navigation">
                      <li><a href="indexutama.php">Home</a></li>
                      <li><a href="pesan.php">Pesan</a></li>
                      <li><a href="index.php">Data</a></li>
                      <li><a href="cek.php">Cek Pemesanan</a></li>
                    </ul>
                  </nav>
                </div>
              </div>
              <!-- Mobile Menu -->
              <div class="col-12">
                <div class="mobile_menu d-block d-lg-none"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>




    <form method="post">
        <center><h1><?= $gagal ?></h1></center>
        <center><h3>Kode Transaksi Anda</h3></center>
      <div class="container">
        <div class="row g-3 justify-content-center">
          <!-- kode transaksi -->
          
            
            <center></center><div class="col-md-7">
              <input class="form-control alert alert-primary" name="kode-pemesanan" value="<?= $random; ?>" style="text-align: center;" readonly="">
            </div></center>
          
        </div>
      </div>
    </form>
    
    <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<!-- JS here -->

<!-- All JS Custom Plugins Link Here here -->
<script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>

<!-- Jquery, Popper, Bootstrap -->
<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="./assets/js/popper.min.js"></script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="./assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="./assets/js/wow.min.js"></script>
<script src="./assets/js/animated.headline.js"></script>
<script src="./assets/js/jquery.magnific-popup.js"></script>

<!-- Scrollup, nice-select, sticky -->
<script src="./assets/js/jquery.scrollUp.min.js"></script>
<script src="./assets/js/jquery.nice-select.min.js"></script>
<script src="./assets/js/jquery.sticky.js"></script>

<!-- contact js -->
<script src="./assets/js/contact.js"></script>
<script src="./assets/js/jquery.form.js"></script>
<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/mail-script.js"></script>
<script src="./assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="./assets/js/plugins.js"></script>
<script src="./assets/js/main.js"></script>

</body>

</html>