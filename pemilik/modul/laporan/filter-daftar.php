<?php
$username = "";
if (isset($_GET['id']))
    extract(_dataGetId($mysqli, "tb_kelas", "idkelas='" . $_GET['id'] . "'"));

?>
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
        <li class="breadcrumb-item" aria-current="page">Filter Pendaftaran Siswa</li>
    </ol>
</nav>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Pilih Periode Pendaftaran</h6>

                <form class="forms-sample" action="?hal=laporan/lap-daftar" method="POST" enctype="multipart/form-data">

                    <input type="hidden" class="form-control" name="idkelas" value="<?= @$idkelas ?>">

                    <div class="form-group row">
                        <label for="input" class="col-sm-3 col-form-label">Periode Laporan</label>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" name="par1" placeholder="Tanggal Mulai" required>
                        </div>
                        <div class="col-sm-4">
                            <input type="date" class="form-control" name="par2" placeholder="Tanggal Akhir" required>
                        </div>
                    </div>


                    <div class="form-group row ">
                        <div class="col-sm-9 offset-3">
                            <button type="submit" class="btn btn-primary mr-2" name="lihat">Lihat</button>
                            <a class="btn btn-light" href="?hal=dashboard">Batal</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>