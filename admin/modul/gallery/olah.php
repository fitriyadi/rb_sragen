<?php
$username="";
if(isset($_GET['id']))
	extract(_dataGetId($mysqli,"tb_guru","idguru='".$_GET['id']."'"));
?>
<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item"><a href="?hal=kriteria/data">Data Guru</a></li>
		<li class="breadcrumb-item" aria-current="page"><?=(isset($_GET['id']) ? 'Ubah':'Tambah')?></li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title"><?=(isset($_GET['id']) ? 'Ubah':'Tambah')?> Data Guru</h6>

				<form class="forms-sample" action="?hal=guru/proses" method="POST" enctype="multipart/form-data">
					
					<input type="hidden" class="form-control" name="idguru" value="<?=@$idguru?>">

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Nama</label>
						<div class="col-sm-9">
							<input type="text" 
                            class="form-control" 
                            name="nama" 
                            value="<?=@$nama?>" 
                            placeholder="Inputkan Nama Guru" 
                            required>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Pendidikan</label>
						<div class="col-sm-9">
							<input type="text" 
                            class="form-control" 
                            name="pendidikan" 
                            value="<?=@$pendidikan?>" 
                            placeholder="Inputkan Pendidikan Guru" 
                            required>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Deskripsi</label>
						<div class="col-sm-9">
							<textarea 
							class="form-control"
							rows="3"
							name="deskripsi"
							placeholder="Inputkan Deskripsi" 
							required><?=@$deskripsi?></textarea>
						</div>
					</div>


					<div class="form-group row">
					<label for="input" class="col-sm-3 col-form-label">Gambar</label>
					<?php if(isset($_GET['id'])){ ?>
						<div class="col-sm-3">
						<img src="../user/images/guru/<?=$foto?>" style="width: 100px;" class="rounded float-left" alt="">
						</div>
					<?php } ?>
						<div class="col-sm-3">
							<input type="file" 
                            class="form-control" 
                            name="fotoguru"  
                            placeholder="Inputkan Gambar">
						</div>
					</div>


					<div class="form-group row ">
						<div class="col-sm-9 offset-3">
							<button type="submit" class="btn btn-primary mr-2" name="<?=(isset($_GET['id']) ? 'ubah':'tambah')?>">Simpan</button>
							<a class="btn btn-light" href="?hal=guru/data">Batal</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>