<?php
$username="";
if(isset($_GET['id']))
	extract(_dataGetId($mysqli,"tb_program","idprogram='".$_GET['id']."'"));
?>
<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item"><a href="?hal=kriteria/data">Data Program</a></li>
		<li class="breadcrumb-item" aria-current="page"><?=(isset($_GET['id']) ? 'Ubah':'Tambah')?></li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title"><?=(isset($_GET['id']) ? 'Ubah':'Tambah')?> Data program</h6>

				<form class="forms-sample" action="?hal=program/proses" method="POST" enctype="multipart/form-data">
					
					<input type="hidden" class="form-control" name="idprogram" value="<?=@$idprogram?>">

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Nama Program</label>
						<div class="col-sm-9">
							<input type="text" 
                            class="form-control" 
                            name="nama" 
                            value="<?=@$nama?>" 
                            placeholder="Inputkan Nama Program" 
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
							id="tinymceExample"
							placeholder="Inputkan Deskripsi" 
							required><?=@$deskripsi?></textarea>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Biaya Daftar</label>
						<div class="col-sm-9">
							<input type="number" 
                            class="form-control" 
                            name="biayadaftar" 
                            value="<?=@$biayadaftar?>" 
                            placeholder="Inputkan Biaya Daftar" 
                            required>
						</div>
					</div>


					<div class="form-group row ">
						<div class="col-sm-9 offset-3">
							<button type="submit" class="btn btn-primary mr-2" name="<?=(isset($_GET['id']) ? 'ubah':'tambah')?>">Simpan</button>
							<a class="btn btn-light" href="?hal=program/data">Batal</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>