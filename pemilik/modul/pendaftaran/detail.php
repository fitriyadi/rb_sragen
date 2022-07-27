<?php
$kode=$_GET['id'];
extract(_dataGetId($mysqli,"tb_pendaftaran","iddaftar='$kode'"));
?>
<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item"><a href="?hal=pendaftaran/data">Data Siswa</a></li>
		<li class="breadcrumb-item" aria-current="page">Detail Siswa</li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Detail Siswa</h6>

				<form class="forms-sample" action="?hal=#" method="POST" enctype="multipart/form-data">
					
					<table class="table">
						<tr>
							<th>Nama Lengkap</th>
							<th>:</th>
							<th><?=$nama_lengkap?></th>
						</tr>
						<tr>
							<th>NIK</th>
							<th>:</th>
							<th><?=$tampil_nik?></th>
						</tr>
						<tr>
							<th>No KK</th>
							<th>:</th>
							<th><?=$tampil_no_kk?></th>
						</tr>
						<tr>
							<th>Tanggal Daftar</th>
							<th>:</th>
							<th><?=tgl_indo($tanggal_daftar)?></th>
						</tr>
						<tr>
							<th>No Ijazah</th>
							<th>:</th>
							<th><?=$tampil_no_jazah?></th>
						</tr>
						<tr>
							<th>Jenis Kelamin</th>
							<th>:</th>
							<th><?=$jenis_kelamin?></th>
						</tr>
						<tr>
							<th>Tempat Lahir</th>
							<th>:</th>
							<th><?=$tempat_lahir?></th>
						</tr>
						<tr>
							<th>Tanggal Lahir</th>
							<th>:</th>
							<th><?=tgl_indo($tanggal_lahir)?></th>
						</tr>
						<tr>
							<th>Alamat</th>
							<th>:</th>
							<th><?=$tampil_alamat?></th>
						</tr>
						<tr>
							<th>No Telpon</th>
							<th>:</th>
							<th><?=$tampil_no_telp?></th>
						</tr>
						<tr>
							<th>Agama</th>
							<th>:</th>
							<th><?=$agama?></th>
						</tr>
						<tr>
							<th>Anak Keb Berapa</th>
							<th>:</th>
							<th><?=$anak_keberapa?></th>
						</tr>
						<tr>
							<th>Jumlah Saudara</th>
							<th>:</th>
							<th><?=$jumlah_saudara?></th>
						</tr>
						<tr>
							<th>Status Anak</th>
							<th>:</th>
							<th><?=$status_anak?></th>
						</tr>
						<tr>
							<th>Bahasa Harian</th>
							<th>:</th>
							<th><?=$bahasa_harian?></th>
						</tr>
						<tr>
							<th>Golongan Darah</th>
							<th>:</th>
							<th><?=$golongan_darah?></th>
						</tr>
						<tr>
							<th>Kelaianan Jasmani</th>
							<th>:</th>
							<th><?=$kelainan_jasmani?></th>
						</tr>

					</table>

					<hr>

					<div class="form-group row ">
						<div class="col-sm-9">
							<a class="btn btn-light" href="?hal=pendaftaran/data">Batal</a>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
