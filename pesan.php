<?php include "db.php";
$queryUser = "SELECT * FROM tambah";
$execUser = mysqli_query($conn, $queryUser);
$dataUser = mysqli_fetch_all($execUser, MYSQLI_ASSOC);

if (isset($_GET['edit'])) {
  $id = $_GET['edit'];
  $queryAmbilUser = "SELECT * FROM tambah WHERE id = $id";
  $execAmbilUser = mysqli_query($conn, $queryAmbilUser);
  $dataAmbilUser = mysqli_fetch_array($execAmbilUser, MYSQLI_ASSOC);
}
if (isset($_POST['hitung'])) {
  $dewasa = $_POST['dewasa'];
  $anak = $_POST['anak'];
  $total = ($dewasa + $anak) * 10000;
}
// $muatan = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
// $random = "INV-" . substr(str_shuffle($muatan), 0, 7);

// if (isset($_POST['pesan'])) {
//   $queryPemesanan = "SELECT * FROM pemesanan";
//   $execPemesanan = mysqli_query($conn, $queryPemesanan);
//   $dataPemesanan = mysqli_fetch_array($execPemesanan, MYSQLI_ASSOC);
//   $nama_pemesan = $_POST['pemesan'];
//   $no_identitas = $_POST['identitas'];
//   $no_tlp = $_POST['tlp'];
//   $wisata = $_POST['nama_wisata'];
//   $tanggal = $_POST['tgl'];
//   $dewasa = $_POST['dewasa'];
//   $anak = $_POST['anak'];
//   $total_harga = $_POST['harga'];
//   $sql = "INSERT INTO `pemesanan` (`id`, `kode`, `nama_pemesan`, `no_identitas`, `no_tlp`, `tempat_wisata`, `tanggal_kunjungan`, `pdewasa`, `panak`, `total_harga`) VALUES (NULL, '$random', '$nama_pemesan', '$no_identitas', '$no_tlp', '$wisata', '$tanggal', '$dewasa', '$anak', '$total_harga');";
//   // var_dump($kode);
//   $coba = mysqli_query($conn, $sql);
//   var_dump($dataPemesanan);
//   if ($coba) {
//     header("location:pesan.php");
//   }

// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pemesanan Tiket</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  <!-- CSS here -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/flaticon.css">
  <link rel="stylesheet" href="assets/css/slicknav.css">
  <link rel="stylesheet" href="assets/css/animate.min.css">
  <link rel="stylesheet" href="assets/css/magnific-popup.css">
  <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="assets/css/themify-icons.css">
  <link rel="stylesheet" href="assets/css/slick.css">
  <link rel="stylesheet" href="assets/css/nice-select.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    .form-check {
      padding-left: 7rem;
    }

    body {
      background: linear-gradient(to top right, #f7f7f7, #ffffff);
      color: black;
    }

    .dark-mode {
      background: linear-gradient(to top right, #000000, #b0b0b0);
      color: white;
    }
  </style>
</head>
<main>
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
                      <li><a href="index.php">Home</a></li>
                      <li><a href="pesan.php">Pesan</a></li>
                      <li><a href="datapesan.php">Data</a></li>
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
    <!-- Header End -->
  </header>
  <form method="post" action="kode.php">
    <center>
      <h1 style="padding-top: 5rem">Pemesanan Tiket Wisata</h1>
    </center>

    <!-- formulir -->
    <div class="container">
      <hr />
      <div class="row g-3">
        <!-- kode transaksi -->
        <center>
          <h3 style="padding-right: 7rem">Kode Transaksi</h3>
          <h4 style="padding-right: 7rem">Akan Diberikan Setelah Sesi Pemesanan</h4>
          <div class="col-md-6">
            <!--<label for="" class="form-control" style="background-color: #dddddd; color:#000000;"><?= $random; ?></label>-->
            <!--<input class="form-control alert alert-primary" name="kode-pemesanan" value="<?= $random; ?>" style="text-align: center;" readonly="">-->
          </div>
        </center>
        <hr />


        <!-- data pemesan -->
        <br>
        <center>
          <h3 style="padding-right: 7rem">Data Pemesan</h3>
        </center>
        <div class="mb-3 row">
          <label for="nama" class="col-sm-2 col-form-label">Nama Pemesan :</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="nama" name="pemesan">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="nik" class="col-sm-2 col-form-label">Nomor Identitas/NIK :</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="nik" name="identitas">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="tlp" class="col-sm-2 col-form-label">No Telepon :</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="tlp" value="+62" name="tlp">
          </div>
        </div>
        <hr />


        <!-- data wisata -->
        <br>
        <center>
          <h3 style="padding-right: 7rem">Data Wisata</h3>
        </center>
        <div class="mb-3 row">
          <label for="nama" class="col-sm-2 col-form-label">Tempat Wisata :</label>
          <div class="col-sm-9">
            <select class="form-control" id="nama" name="nama_wisata">
              <?php
              @$id = $_GET['edit'];
              if (@$id == '') {
                $queryAmbilUser = "SELECT * FROM tambah";
                $execAmbilUser = mysqli_query($conn, $queryAmbilUser);
                while ($dataAmbilUser = mysqli_fetch_array($execAmbilUser, MYSQLI_ASSOC)) {
              ?>
                  <option value="<?= $dataAmbilUser['nama'] ?>"><?= $dataAmbilUser['nama'] ?></option>
                <?php }
              } else {
                $queryAmbilUser = "SELECT * FROM tambah WHERE id = $id";
                $execAmbilUser = mysqli_query($conn, $queryAmbilUser);
                $dataAmbilUser = mysqli_fetch_array($execAmbilUser, MYSQLI_ASSOC);
                ?>
                <option value="<?= $dataAmbilUser['nama'] ?>"><?= $dataAmbilUser['nama'] ?></option>
              <?php } ?>
            </select>
          </div>
        </div>

        <div class="mb-3 row">
          <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Kunjungan :</label>
          <div class="col-sm-9">
            <input type="date" class="form-control" id="tanggal" placeholder="Pilih Tempat Wisata" name="tgl">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="pdewasa" class="col-sm-2 col-form-label">Pengunjung Dewasa :</label>
          <div class="col-sm-9">
            <!-- <input type="number" class="form-control" id="pdewasa" value="0" onchange="jumlah()" name="dewasa"> -->
            <input class="form-control" type="text" id="pdewasa" onkeyup="hitung()" name="dewasa" required="">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="panak" class="col-sm-2 col-form-label">Pengunjung Anak :</label>
          <div class="col-sm-9">
            <!-- <input type="number" class="form-control" id="panak" value="0" onchange="jumlah()" name="anak"> -->
            <input class="form-control" type="text" id="panak" onkeyup="hitung()" name="anak" required="">
          </div>
        </div>
        <hr>

        <label for="">Harga Tiket / Orang Dewasa Rp. 10000,-</label>
        <label for="">Harga Tiket / Anak Rp. 5000,-</label>
        <label for="harga">Total = Rp.
          <div class="col-sm-3"><input class="form-control alert-primary" type="text" name="harga" id="hasil_paket_3" onkeyup="hitung()" readonly=""></div>
        </label>

        <hr />
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Saya dan/ rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetappkan</label>
        </div>
      </div>
      <center>
        <button class="btn btn-primary" style="margin: 20px;" type="submit" name="pesan">Pesan</button>
        <button type="submit" class="btn btn-warning" style="margin: 20px;">Reset</button>
        <!-- <button type="button" class="btn btn-warning" style="margin: 20px;" name="hitung" >Hitung Total</button> -->
      </center>
  </form>
  <script>
    function hitung() {
      var nilai_paket_1 = document.getElementById('pdewasa').value;
      var nilai_paket_2 = document.getElementById('panak').value;

      if (nilai_paket_1 == "") {
        nilai_paket_1 = 0;
      } else
      if (nilai_paket_2 == "") {
        nilai_paket_2 = 0;
      } else {
        var hasil_paket_1 = nilai_paket_1 * 10000;
        var hasil_paket_2 = nilai_paket_2 * 5000;
        var hasil_paket_3 = hasil_paket_1 + hasil_paket_2;
        document.getElementById('hasil_paket_3').value = hasil_paket_3;
      }
    }
  </script>



  <!-- <script>
    function anak() {
      let jmlhAnak = parseInt(document.getElementById('panak').value);
      return jmlhAnak;
    }

    function dewasa() {
      let jmlhDewasa = parseInt(document.getElementById('pdewasa').value);
      return jmlhDewasa;
    }

    function jumlah() {
      let total = document.getElementById('total');
      let totalharga = (anak() + dewasa()) * 10000;
      total.innerHTML = totalharga;
    }
  </script> -->
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <!-- <script>
      function bolpoin() {
  let jmlhBolpoin = parseInt(document.getElementById('jumlahBolpoin').value);
  let total= jmlhBolpoin * 2000;
  return total;
}

function buku() {
  let jmlhBuku = parseInt(document.getElementById('jumlahBuku').value);
  let total= jmlhBuku * 5000;
  return total;
}

function pensil() {
  let jmlhPensil = parseInt(document.getElementById('jumlahPensil').value);
  let total= jmlhPensil * 2000;
  return total;
}

function penghapus() {
  let jmlhPenghapus = parseInt(document.getElementById('jumlahPenghapus').value);
  let total= jmlhPenghapus * 1000;
  return total;
}

function diskon() {
  let jmlhDiskon = document.getElementById('jumlahDiskon').value;
  let total= jmlhDiskon / 100;
  return total;
}

function jumlah() {
  let total = document.getElementById('total');
  let diskonjumlah = document.getElementById('diskon');
  let totaljumlah = document.getElementById('totaljumlah');
  let totalharga = bolpoin() + buku() + pensil() + penghapus();
  let diskonawal = totalharga * diskon();
  let totalsemua = totalharga - diskonawal;
  total.innerHTML = totalharga;
  diskonjumlah.innerHTML = document.getElementById('jumlahDiskon').value;
  totaljumlah.innerHTML= totalsemua;

}

//black and light background
function myFunction() {
  var element = document.body;
  element.classList.toggle("dark-mode");
}
    </script> -->
</main>


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