<?php
$username="";
if(isset($_GET['id']))
	extract(_dataGetId($mysqli,"tb_profil","idprofil='".$_GET['id']."'"));
?>
<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item"><a href="?hal=kriteria/data">Data Profil</a></li>
		<li class="breadcrumb-item" aria-current="page"><?=(isset($_GET['id']) ? 'Ubah':'Tambah')?></li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title"><?=(isset($_GET['id']) ? 'Ubah':'Tambah')?> Data profil</h6>

				<form class="forms-sample" action="?hal=profil/proses" method="POST">
					
					<input type="hidden" class="form-control" name="idprofil" value="<?=@$idprofil?>">

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Nama profil</label>
						<div class="col-sm-9">
							<input type="text" 
							class="form-control" 
							name="judul" 
							value="<?=@$judul?>" 
							placeholder=""
							required>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Keterangan</label>
						<div class="col-sm-9">
							<textarea 
							class="form-control"
							rows="3"
							name="isi"
							placeholder="Inputkan Keterangan" 
							id="tinymceExample"
							required><?=@$isi?></textarea>
						</div>
					</div>

					<div class="form-group row ">
						<div class="col-sm-9 offset-3">
							<button type="submit" class="btn btn-primary mr-2" name="<?=(isset($_GET['id']) ? 'ubah':'tambah')?>">Simpan</button>
							<a class="btn btn-light" href="?hal=profil/data">Batal</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>