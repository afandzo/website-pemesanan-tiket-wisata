<?php include "db.php";
$queryUser = "SELECT * FROM tambah";
$execUser = mysqli_query($conn, $queryUser);
$dataUser = mysqli_fetch_all($execUser, MYSQLI_ASSOC);
// var_dump($dataUser);

///Delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $queryDeleteUser = "DELETE FROM tambah WHERE id = $id";
    $execDeleteUser = mysqli_query($conn, $queryDeleteUser);
    if ($execDeleteUser) {
        header("location:index.php");
    }
}
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $queryAmbilUser = "SELECT * FROM tambah WHERE id = $id";
    $execAmbilUser = mysqli_query($conn, $queryAmbilUser);
    $dataAmbilUser = mysqli_fetch_array($execAmbilUser, MYSQLI_ASSOC);
}
if (isset($_GET['tambah'])) {
    $id = $_GET['tambah'];
    $queryAmbilUser = "SELECT * FROM tambah WHERE id = $id";
    $execAmbilUser = mysqli_query($conn, $queryAmbilUser);
    $dataAmbilUser = mysqli_fetch_array($execAmbilUser, MYSQLI_ASSOC);
}
 if (isset($_POST['simpan'])) {
   //buat folder bernama gambar
    $wisata = $_POST['nama'];
    $lokasi = $_POST['lokasi'];
    $lama = $_POST['lama'];
    $harga = $_POST['harga'];
    $foto = $_FILES['filegambar'];
    $tempdir = "gambar/"; 
    if (!file_exists($tempdir))
            mkdir($tempdir,0755); 

            $target_path = $tempdir . basename($_FILES['filegambar']['name']);

            //nama gambar
            $nama_gambar=$_FILES['filegambar']['name'];
            //ukuran gambar
            $ukuran_gambar = $_FILES['filegambar']['size']; 

             $fileinfo = @getimagesize($_FILES["filegambar"]["tmp_name"]);
            //  lebar gambar
             $width = $fileinfo[0];  
            //  tinggi gambar
             $height = $fileinfo[1]; 
            if($ukuran_gambar > 81920*10){ 
                echo 'Ukuran gambar melebihi 8mb';
            //  }else if ($fileinfo[0] > "281" || $fileinfo[1] > "263") {
            //       echo 'Ukuran gambar harus 881x863';
            }else{
                if (move_uploaded_file($_FILES['filegambar']['tmp_name'], $target_path)) {
                    $sql="INSERT INTO `tambah` (`id`, `nama`, `lokasi`, `lama`, `harga`, `foto`) VALUES (NULL, '$wisata', '$lokasi', '$lama', '$harga', '$nama_gambar');";
                    $coba = mysqli_query($conn, $sql);
                    echo 'Simpan data berhasil';
                    header("location:index.php");
                } else {
                    echo 'Simpan data gagal';
                }
            }
    // $queryTambahUser = "INSERT INTO `tambah_wisata` (`id`, `nama_wisata`, `lokasi_wisata`, `deskripsi`, `harga`) VALUES (NULL, '$wisata', '$lokasi', '$deskripsi', '$harga')";
    // $execTambahUser = mysqli_query($conn, $queryTambahUser);
    // if ($coba) {
    //     header("location:index.php");
    // }
}


if (isset($_POST['kirim'])) {
    $wisata = $_POST['nama'];
    $lokasi = $_POST['lokasi'];
    $lama = $_POST['lama'];
    $harga = $_POST['harga'];
    $foto = $_POST['foto'];
    $queryUpdateUser = "UPDATE tambah SET nama = '$wisata', lokasi='$lokasi', lama='$lama',harga = '$harga',foto = '$foto' WHERE id = $id";
    $execUpdateUser = mysqli_query($conn, $queryUpdateUser);
    if ($execUpdateUser) {
        header("location:index.php");
    }
}


?>
<?php
  if (isset($_POST['simpan'])) {
    //buat folder bernama gambar
     
   }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Data Wisata</title>

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
                    <a href="index.html"
                      ><img src="assets/img/logo/logo.png" alt=""
                    /></a>
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
                        <li>
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







    <table class="table table-dark table-striped" style="margin: 30px; padding:30px;" >
        <thead>
            <tr >
                <th scope="col">No</th>
                <th scope="col">Wisata</th>
                <th scope="col">Lokasi</th>
                <th scope="col">Lama</th>
                <th scope="col">Harga</th>
                <th scope="col">Foto</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 0 ?>
            <?php foreach ($dataUser as $wisata) { ?>
                <?php $no++ ?>
                <tr>
                    <th scope="row"><?= $no ?></th>
                    <td><?= $wisata['nama'] ?></td>
                    <td><?= $wisata['lokasi'] ?></td>
                    <td><?= $wisata['lama'] ?></td>
                    <td><?= $wisata['harga'] ?></td>
                    <td><img src="gambar/<?=$wisata['foto']?>" width="100"></td>
                    <td>
                        <a href="?edit=<?= $wisata['id']?>" class="btn btn-warning">UPDATE</a>
                        <a href="?delete=<?= $wisata['id']?>" class="btn btn-danger">DELETE</a>
                        <a href="?tambah=<?= $wisata['id']?>" class="btn btn-primary">TAMBAH</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php if (isset($_GET['edit'])) : ?>
      <div class="container">
        <form action="" method="post">
        <div class="mb-3 row">
          <label for="nama" class="col-sm-2 col-form-label">Nama Wisata :</label>
          <div class="col-sm-9">
            <input type="text" id="nama" name="nama" value="<?= $dataAmbilUser['nama'] ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="lokasi" class="col-sm-2 col-form-label">Lokasi Wisata :</label>
          <div class="col-sm-9">
            <input type="text" id="lokasi" name="lokasi" value="<?= $dataAmbilUser['lokasi'] ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="lama" class="col-sm-2 col-form-label">Lama Wisata :</label>
          <div class="col-sm-9">
            <input type="text" id="lama" name="lama" value="<?= $dataAmbilUser['lama'] ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="harga" class="col-sm-2 col-form-label">Harga Wisata :</label>
          <div class="col-sm-9">
            <input type="text" id="harga" name="harga" value="<?= $dataAmbilUser['harga'] ?>">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="foto" class="col-sm-2 col-form-label">Foto Wisata :</label>
          <div class="col-sm-9">
            <input type="file" id="foto" name="foto" value="<?= $dataAmbilUser['foto'] ?>">
          </div>
        </div>
            <input type="submit" name="kirim" value="EDIT DATA">
        </form>  
      </div>
    <?php endif ?>
    <?php if (isset($_GET['tambah'])) : ?>
      <div class="container">
        <form action="" method="post" enctype="multipart/form-data" style="padding-left: 35px;">
        <div class="mb-3 row">
          <label for="nama" class="col-sm-2 col-form-label">Nama Wisata :</label>
          <div class="col-sm-9">
            <input type="text" id="nama" name="nama" value="">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="lokasi" class="col-sm-2 col-form-label">Lokasi Wisata :</label>
          <div class="col-sm-9">
            <input type="text" id="lokasi" name="lokasi" value="">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="lama" class="col-sm-2 col-form-label">Lama Wisata :</label>
          <div class="col-sm-9">
            <input type="text" id="lama" name="lama" value="">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="harga" class="col-sm-2 col-form-label">Harga Wisata :</label>
          <div class="col-sm-9">
            <input type="text" id="harga" name="harga" value="">
          </div>
        </div>
        <div class="mb-3 row">
          <label for="foto" class="col-sm-2 col-form-label">Foto Wisata :</label>
          <div class="col-sm-9">
            <input type="file" id="foto" name="filegambar" id="filegambar">
          </div>
        </div>
            <input type="submit" name="simpan" value="TAMBAH DATA">
        </form>
      </div>  
        <?php endif ?>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>br

        





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






    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>