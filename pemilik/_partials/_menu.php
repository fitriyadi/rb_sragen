<ul class="nav">
  <li class="nav-item nav-category">Main</li>
  
  <li class="nav-item">
    <a href="?hal=dashboard" class="nav-link">
      <i class="link-icon" data-feather="box"></i>
      <span class="link-title">Home</span>
    </a>
  </li>

  <li class="nav-item nav-category">Master Data</li>

  <li class="nav-item">
    <a href="?hal=pengguna/data" class="nav-link">
      <i class="link-icon" data-feather="users"></i>
      <span class="link-title">Pengguna</span>
    </a>
  </li>


   <li class="nav-item nav-category">Pendafataran</li>

     <li class="nav-item">
    <a href="?hal=pendaftaran/data" class="nav-link">
      <i class="link-icon" data-feather="activity"></i>
      <span class="link-title">Pendaftaran Siswa</span>
    </a>
  </li>

  <li class="nav-item">
    <a href="?hal=pembayaran/data" class="nav-link">
      <i class="link-icon" data-feather="dollar-sign"></i>
      <span class="link-title">Pembayaran</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#evaluasi" role="button" aria-expanded="false" aria-controls="evaluasi">
      <i class="link-icon" data-feather="printer"></i>
      <span class="link-title">Laporan</span>
      <i class="link-arrow" data-feather="chevron-down"></i>
    </a>
    <div class="collapse" id="evaluasi">
      <ul class="nav sub-menu">
        <li class="nav-item">
          <a href="?hal=laporan/filter-daftar" class="nav-link">Lap. Pendafatran</a>
        </li>
        <li class="nav-item">
          <a href="?hal=laporan/filter-bayar" class="nav-link">Lap. Pembayaran</a>
        </li>
      </ul>
    </div>
  </li>
</ul>