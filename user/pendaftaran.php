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
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
          <div class="row align-items-center ">

            <div class="col-md-5 mt-5 pt-5">
              <span class="text-cursive h5 text-red">Pendaftaran</span>
              <h3 class="mb-3 font-weight-bold text-teal">Bergabung Bersama Kami</h3>
              <p><a href="index.html" class="text-white">Home</a> <span class="mx-3">/</span> <strong>Pendaftaran</strong></p>
            </div>
            
          </div>
        </div>
      </div>
    </div>


    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row justify-content-center text-center">
        <div class="col-7 text-center mb-0">
          <h2>Daftar Siswa</h2>
          <p>Silakan isi data diri siswa</p>
        </div>
      </div>
        <div class="row">
          <div class="col-lg-12 mb-0" >
            <form action="daftar_proses.php" method="post">
              <div class="form-group row">
                <div class="col-md-4 mb-4 mb-lg-0">
                  <input type="text" class="form-control" name="nama" placeholder="Nama Siswa">
                </div>
                <div class="col-md-4">
                  <input type="text" class="form-control" name="tempatlahir" placeholder="Tempat Lahir">
                </div>
                <div class="col-md-4">
                  <input type="date" class="form-control" name="tanggallahir" placeholder="Tanggal Lahir">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-4">
                  <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="col-md-4">
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                 <div class="col-md-4">
                  <input type="password" class="form-control" name="konfirmasi-password" placeholder="konfirmasi Password">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-4">
                  <select class="form-control" name="jk" required>
                     <option value="">-Pilih Jenis Kelamin-</option>
                    <option value="L">L</option>
                    <option value="P">P</option>
                 </select>
                </div>

                <div class="col-md-4">
                  <select class="form-control" name="agama" required>
                    <option value="">-Pilih Agama-</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Lainnya">Lainnya</option>
                 </select>
                </div>

                <div class="col-md-4">
                  <input type="number" class="form-control" name="sekolahasal" placeholder="Asal Sekolah">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6">
                  <input type="text" class="form-control" name="namaortu" placeholder="Nama Orangtua">
                </div>

                <div class="col-md-6">
                  <input type="number" class="form-control" name="nohportu" placeholder="No Hp Orangtua">
                </div>
              </div>


              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="alamat" id="" class="form-control" placeholder="Alamat" cols="10" rows="3"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-3 mr-auto">
                  <input type="submit" name="tambah" class="btn btn-block btn-primary text-white py-3 px-5" value="Daftar">
                </div>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <span class="text-cursive h5 text-red d-block">Testimonial</span>
            <h2 class="text-black">What Our Client Says About Us</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="testimonial-3-wrap">
              

              <div class="owl-carousel nonloop-block-13">
                <div class="testimonial-3 d-flex">
                  <div class="vcard-wrap mr-5">
                    <img src="images/person_1.jpg" alt="Image" class="vcard img-fluid">
                  </div>
                  <div class="text">
                    <h3>Jeff Woodland</h3>
                    <p class="position">Partner</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam earum libero rem maxime magnam. Similique esse ab earum, autem consectetur.</p>
                  </div>
                </div>

                <div class="testimonial-3 d-flex">
                  <div class="vcard-wrap mr-5">
                    <img src="images/person_3.jpg" alt="Image" class="vcard img-fluid">
                  </div>
                  <div class="text">
                    <h3>Jeff Woodland</h3>
                    <p class="position">Partner</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam earum libero rem maxime magnam. Similique esse ab earum, autem consectetur.</p>
                  </div>
                </div>

                <div class="testimonial-3 d-flex">
                  <div class="vcard-wrap mr-5">
                    <img src="images/person_2.jpg" alt="Image" class="vcard img-fluid">
                  </div>
                  <div class="text">
                    <h3>Jeff Woodland</h3>
                    <p class="position">Partner</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam earum libero rem maxime magnam. Similique esse ab earum, autem consectetur.</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        
      </div>
    </div>

    

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="footer-heading mb-3">About Us</h2>
                <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>

                <h2 class="footer-heading mb-4">Newsletter</h2>
                <form action="#" class="d-flex" class="subscribe">
                  <input type="text" class="form-control mr-3" placeholder="Email">
                  <input type="submit" value="Send" class="btn btn-primary">
                </form>
          </div>
          <div class="col-lg-8 ml-auto">
            <div class="row">
              <div class="col-lg-4 ml-auto">
                <h2 class="footer-heading mb-4">Navigation</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Terms of Service</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-4">
                <h2 class="footer-heading mb-4">Navigation</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Terms of Service</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
                
              </div>

              
              
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>.Downloaded from <a href="https://themeslab.org/" target="_blank">Themeslab</a>

            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
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
