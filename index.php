<?php include "db.php";
$queryUser = "SELECT * FROM tambah";
$execUser = mysqli_query($conn, $queryUser);
$dataUser = mysqli_fetch_all($execUser, MYSQLI_ASSOC);


?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Pesan Tiket</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="manifest" href="site.webmanifest" />
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />

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
                  <a href="index.php"><img src="assets/img/logo/logo.png" alt="" /></a>
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

  <main>
    <!-- slider Area Start-->
    <div class="slider-area">
      <!-- Mobile Menu -->
      <div class="slider-active">
        <div class="single-slider hero-overly slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.jpg">
          <div class="container">
            <div class="row">
              <div class="col-xl-9 col-lg-9 col-md-9">
                <div class="hero__caption">
                  <h1>Temukan <span>Tempat wisata selanjutnya!</span></h1>
                  <p>Kemana kamu akan pergi?</p>
                </div>
              </div>
            </div>
            <!-- Search Box -->
            <div class="row">
              <div class="col-xl-12">
                <!-- form -->
                <form action="#" class="search-box">
                  <div class="input-form mb-30">
                    <input type="text" placeholder="When Would you like to go ?" />
                  </div>
                  <div class="select-form mb-30">
                    <div class="select-itms">
                      <select name="select" id="select1">
                        <option value="">When</option>
                        <option value="">Services-1</option>
                        <option value="">Services-2</option>
                        <option value="">Services-3</option>
                      </select>
                    </div>
                  </div>
                  <div class="search-form mb-30">
                    <a href="#">Search</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- slider Area End-->
    <!-- Our Services Start -->
    <div class="our-services servic-padding">
      <div class="container">
        <div class="row d-flex justify-contnet-center">
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
            <div class="single-services text-center mb-30">
              <div class="services-ion">
                <span class="flaticon-tour"></span>
              </div>
              <div class="services-cap">
                <h5>8000+ Our Local<br />Guides</h5>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
            <div class="single-services text-center mb-30">
              <div class="services-ion">
                <span class="flaticon-pay"></span>
              </div>
              <div class="services-cap">
                <h5>100% Trusted Tour<br />Agency</h5>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
            <div class="single-services text-center mb-30">
              <div class="services-ion">
                <span class="flaticon-experience"></span>
              </div>
              <div class="services-cap">
                <h5>28+ Years of Travel<br />Experience</h5>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
            <div class="single-services text-center mb-30">
              <div class="services-ion">
                <span class="flaticon-good"></span>
              </div>
              <div class="services-cap">
                <h5>98% Our Travelers<br />are Happy</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Our Services End -->
    <!-- Favourite Places Start -->
    <div class="favourite-place place-padding">
      <div class="container">
        <!-- Section Tittle -->
        <div class="row">
          <div class="col-lg-12">
            <div class="section-tittle text-center">
              <span>FEATURED TOURS Packages</span>
              <h2>Tempat Wisata Karanganyar</h2>
            </div>
          </div>
        </div>
        <div class="row">

          <?php foreach ($dataUser as $wisata) { ?>
            <div class="col-xl-4 col-lg-4 col-md-6">
              <div class="single-place mb-30">
                <div class="place-img">
                  <img src="gambar/<?= $wisata['foto'] ?>" width="100">
                </div>
                <div class="place-cap">
                  <div class="place-cap-top">
                    <span><i class="fas fa-star"></i><span>8.0 Superb</span>
                    </span>
                    <h3><a href="#"><?= $wisata['nama'] ?></a></h3>
                    <p class="dolor">IDR <?= $wisata['harga'] ?> <span>/ Per Orang</span></p>
                  </div>
                  <div class="place-cap-bottom">
                    <ul>
                      <li><i class="far fa-clock"></i><?= $wisata['lama'] ?></li>
                      <li><i class="fas fa-map-marker-alt"></i><?= $wisata['lokasi'] ?></li>
                    </ul>
                  </div>
                  <center style="margin-top: 20px;"><a href="pesan.php?edit=<?= $wisata['id'] ?>" class="btn btn-primary">Pesan!</a></center>
                </div>
              </div>
            </div>
          <?php } ?>

        </div>
      </div>
    </div>
    <!-- Favourite Places End -->

    <!-- Testimonial Start -->
    <div class="testimonial-area testimonial-padding" data-background="assets/img/testmonial/testimonial_bg.jpg">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-xl-11 col-lg-11 col-md-9">
            <div class="h1-testimonial-active">
              <!-- Single Testimonial -->
              <div class="single-testimonial text-center">
                <!-- Testimonial Content -->
                <div class="testimonial-caption">
                  <div class="testimonial-top-cap">
                    <img src="assets/img/icon/testimonial.png" alt="" />
                    <p>
                      Selain tiket yang murah terdapat banyak pemandangan
                      bagus juga.
                    </p>
                  </div>
                  <!-- founder -->
                  <div class="testimonial-founder d-flex align-items-center justify-content-center">
                    <div class="founder-img">
                      <img src="assets/img/testmonial/Homepage_testi.png" alt="" />
                    </div>
                    <div class="founder-text">
                      <span>Jessya Inn</span>
                      <p>Co Founder</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Single Testimonial -->
              <div class="single-testimonial text-center">
                <!-- Testimonial Content -->
                <div class="testimonial-caption">
                  <div class="testimonial-top-cap">
                    <img src="assets/img/icon/testimonial.png" alt="" />
                    <p>
                      Logisti Group is a representative logistics operator
                      providing full range of ser of customs clearance and
                      transportation worl.
                    </p>
                  </div>
                  <!-- founder -->
                  <div class="testimonial-founder d-flex align-items-center justify-content-center">
                    <div class="founder-img">
                      <img src="assets/img/testmonial/Homepage_testi.png" alt="" />
                    </div>
                    <div class="founder-text">
                      <span>Jessya Inn</span>
                      <p>Co Founder</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Testimonial End -->
    <!-- Blog Area Start -->
    <div class="home-blog-area section-padding2">
      <div class="container">
        <!-- Section Tittle -->
        <div class="row">
          <div class="col-lg-12">
            <div class="section-tittle text-center">
              <span>Our Recent news</span>
              <h2>Tourist Blog</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6">
            <div class="home-blog-single mb-30">
              <div class="blog-img-cap">
                <div class="blog-img">
                  <img src="assets/img/blog/home-blog1.jpg" alt="" />
                </div>
                <div class="blog-cap">
                  <p>| Traveling</p>
                  <h3>
                    <a href="single-blog.html">Tips For Taking A Long-Term Trip With Kids.</a>
                  </h3>
                  <a href="#" class="more-btn">Read more »</a>
                </div>
              </div>
              <div class="blog-date text-center">
                <span>24</span>
                <p>Now</p>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-md-6">
            <div class="home-blog-single mb-30">
              <div class="blog-img-cap">
                <div class="blog-img">
                  <img src="assets/img/blog/home-blog2.jpg" alt="" />
                </div>
                <div class="blog-cap">
                  <p>| Traveling</p>
                  <h3>
                    <a href="single-blog.html">Tips For Taking A Long-Term Trip With Kids.</a>
                  </h3>
                  <a href="#" class="more-btn">Read more »</a>
                </div>
              </div>
              <div class="blog-date text-center">
                <span>24</span>
                <p>Now</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Blog Area End -->
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