<?php
$username="";
if(isset($_GET['id']))
	extract(_dataGetId($mysqli,"tb_siswa_daftar join tb_siswa using(iddaftar) join tb_program using(idprogram)","iddaftarpaket='".$_GET['id']."'"));
?>
<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item"><a href="?hal=pembayaran/data">Ubah Pembayaran</a></li>
		<li class="breadcrumb-item" aria-current="page"><?=(isset($_GET['id']) ? 'Ubah':'Tambah')?></li>
	</ol>
</nav>

<?php

	$namasiswa=_dataCustom($mysqli,"select nama from tb_siswa where iddaftar='$iddaftar'");
	$namaortu=_dataCustom($mysqli,"select namaortu from tb_siswa where iddaftar='$iddaftar'");
	$email=_dataCustom($mysqli,"select email from tb_siswa where iddaftar='$iddaftar'");
	$biaya=_dataCustom($mysqli,"select namaortu from tb_siswa where iddaftar='$iddaftar'");
?>	
<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title"><?=(isset($_GET['id']) ? 'Ubah':'Tambah')?> Data Pembayaran</h6>

				<form class="forms-sample" action="?hal=pembayaran/proses" method="POST" enctype="multipart/form-data">
					
					<input type="hidden" class="form-control" name="iddaftarpaket" value="<?=@$iddaftarpaket?>">

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Nama Siswa</label>
						<div class="col-sm-9">
							<input type="text" 
                            class="form-control" 
                            name="namasiswa" 
                            value="<?=@$namasiswa?>" 
                            placeholder="Inputkan Nama Siswa" 
                            readonly>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Nama Orangtua</label>
						<div class="col-sm-9">
							<input type="text" 
                            class="form-control" 
                            name="namasiswa" 
                            value="<?=@$namaortu?>" 
                            placeholder="Inputkan Nama Siswa" 
                            readonly>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Email</label>
						<div class="col-sm-9">
							<input type="text" 
                            class="form-control" 
                            name="namasiswa" 
                            value="<?=@$email?>" 
                            placeholder="Inputkan Nama Siswa" 
                            readonly>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Program</label>
						<div class="col-sm-9">
							<input type="text" 
                            class="form-control" 
                            name="namasiswa" 
                            value="<?=@$nama?>" 
                            placeholder="Inputkan Nama Siswa" 
                            readonly>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Biaya Daftar</label>
						<div class="col-sm-9">
							<input type="text" 
                            class="form-control" 
                            name="namasiswa" 
                            value="<?=@$biayadaftar?>" 
                            placeholder="Inputkan Nama Siswa" 
                            readonly>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Tanggal</label>
						<div class="col-sm-9">
							<input type="date" 
                            class="form-control" 
                            name="tanggal" 
                            value="<?=$tanggalbayar?>" 
                            placeholder="Inputkan Tanggal" 
                            readonly>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Status Bayar</label>
						<div class="col-sm-9">
							<select 
								class="form-control select2" 
								name="status" 
								required="">
								<?php
								foreach ($_array_status_bayar as $key => $value):
									?>
									<option 
									value="<?=$key?>">
									<?=$value?>
									</option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>


					<div class="form-group row ">
						<div class="col-sm-9 offset-3">
							<button type="submit" class="btn btn-primary mr-2" name="<?=(isset($_GET['id']) ? 'ubah':'tambah')?>">Proses</button>
							<a class="btn btn-light" href="?hal=pembayaran/data">Batal</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>