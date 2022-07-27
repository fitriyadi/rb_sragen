<!doctype html>
<html lang="en">

  <head>
    <title>Rumah Belajar Sragen</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700|Indie+Flower" rel="stylesheet">
    

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">
           <?php require_once '_header.php'; ?>
      </header>

    <div class="ftco-blocks-cover-1">
       <!-- data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')" -->
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center ">
            
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-info">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <span class="text-cursive h5 text-red d-block">Penawaran Paket Program</span>
            <h2 class="text-white">Program Kami</h2>
          </div>
        </div>

        <div class="row">
           <?php
              $no = 0;
              $sql = "SELECT * FROM tb_program where idprogram='".$_GET['id']."'";
              foreach (_dataGetAll($mysqli, $sql) as $key => $value) :
                extract($value);
              ?>

          <div class="col-lg-12">
            <div class="package text-center bg-white mt-4">
              <span class="img-wrap"><img src="images/flaticon/svg/002-target.svg" alt="Image" class="img-fluid"></span>
              <h3 class="text-teal"><?=$nama?></h3>
              <p>Biaya Pendaftaran : Rp. <?=$biayadaftar?> </p>
               <p><?=$deskripsi?> </p>
              <p><a href="program.php" class="btn btn-success btn-custom-1 mt-4">Kembali</a></p>
            </div>
          </div>

        <?php endforeach; ?>



        </div>
      </div>
    </div>
        

    <footer class="site-footer">
      <?php require_once '_footer.php'; ?>
    </footer>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

  </body>

</html>
