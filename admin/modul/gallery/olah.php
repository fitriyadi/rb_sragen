<?php
$username="";
if(isset($_GET['id']))
	extract(_dataGetId($mysqli,"tb_gallery","idgallery='".$_GET['id']."'"));
?>
<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item"><a href="?hal=kriteria/data">Data Gallery</a></li>
		<li class="breadcrumb-item" aria-current="page"><?=(isset($_GET['id']) ? 'Ubah':'Tambah')?></li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title"><?=(isset($_GET['id']) ? 'Ubah':'Tambah')?> Data gallery</h6>

				<form class="forms-sample" action="?hal=gallery/proses" method="POST" enctype="multipart/form-data">
					
					<input type="hidden" class="form-control" name="idgallery" value="<?=@$idgallery?>">

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Judul</label>
						<div class="col-sm-9">
							<input type="text" 
                            class="form-control" 
                            name="judul" 
                            value="<?=@$judul?>" 
                            placeholder="Inputkan Judul gallery" 
                            required>
						</div>
					</div>


					<div class="form-group row">
					<label for="input" class="col-sm-3 col-form-label">Gambar</label>
					<?php if(isset($_GET['id'])){ ?>
						<div class="col-sm-3">
						<img src="../user/images/gallery/<?=$foto?>" style="width: 100px;" class="rounded float-left" alt="">
						</div>
					<?php } ?>
						<div class="col-sm-3">
							<input type="file" 
                            class="form-control" 
                            name="gallery"  
                            placeholder="Inputkan Gambar">
						</div>
					</div>


					<div class="form-group row ">
						<div class="col-sm-9 offset-3">
							<button type="submit" class="btn btn-primary mr-2" name="<?=(isset($_GET['id']) ? 'ubah':'tambah')?>">Simpan</button>
							<a class="btn btn-light" href="?hal=gallery/data">Batal</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>