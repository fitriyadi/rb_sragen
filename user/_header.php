<?php
  require_once '../setting/konstanta.php';
  require_once '../setting/koneksi.php';
  require_once '../setting/crud.php';
  require_once '../setting/helper.php';
?>

        <div class="container mb-3">
          <div class="d-flex align-items-center">
            <div class="site-logo mr-auto">
              <a href="index.html" style="font-size: 28px;"><img src="images/logorbs.png" width="40px;"> Rumah Belajar - <span class="text-primary"> Sragen </span></a>
            </div>
            <div class="site-quick-contact d-none d-lg-flex ml-auto ">
              <div class="d-flex site-info align-items-center mr-5">
                <span class="block-icon mr-3"><span class="icon-map-marker text-yellow"></span></span>
                <span>Jl. Slamet Riyadi No.157, Dusun Kebayanan <br> Krajoyok,Sragen Tengah</span>
              </div>
              <div class="d-flex site-info align-items-center">
                <span class="block-icon mr-3"><span class="icon-clock-o"></span></span>
                <span>Senin - Sabtu 08:30 - 21:00 <br> Minggu Tutup</span>
              </div>
              
            </div>
          </div>
        </div>


        <div class="container">
          <div class="menu-wrap d-flex align-items-center">
            <span class="d-inline-block d-lg-none"><a href="#" class="text-black site-menu-toggle js-menu-toggle py-5"><span class="icon-menu h3 text-black"></span></a></span>

                          <nav class="site-navigation text-left mr-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav mr-auto ">
                  <li><a href="index.php" class="nav-link">Home</a></li>
                   <li class="dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Profil <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">

                          <?php
                            $no = 0;
                            $sql = "SELECT * FROM tb_profil";
                            foreach (_dataGetAll($mysqli, $sql) as $key => $value) :
                              extract($value);
                            ?>
                             <li  class="nav-link"><a href="profil.php?id=<?=$idprofil?>"><?=$judul?></a></li>
                          <?php endforeach; ?>
                        </ul>
                  </li>
                  
                  <li><a href="guru.php" class="nav-link">Guru</a></li>
                  <li><a href="gallery.php" class="nav-link">Gallery</a></li>
                  <li><a href="program.php" class="nav-link">Program</a></li>
                   <li><a href="blog.php" class="nav-link">Blog</a></li>

                  <li><a href="pendaftaran.php" class="nav-link">Pendaftaran</a></li>
                  <li><a href="kontak.php" class="nav-link">Kontak</a></li>
                  <li><a href="../login.php" class="nav-link">Login</a></li>

                 
                </ul>
              </nav>

              <div class="top-social ml-auto">
                <a href="#"><span class="icon-facebook text-teal"></span></a>
                <a href="#"><span class="icon-twitter text-success"></span></a>
                <a href="#"><span class="icon-linkedin text-yellow"></span></a>
              </div>

          </div>
        </div>