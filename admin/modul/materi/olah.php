<?php
$username="";
if(isset($_GET['id']))
	extract(_dataGetId($mysqli,"tb_materi","idmateri='".$_GET['id']."'"));
?>
<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item"><a href="?hal=kriteria/data">Data Materi</a></li>
		<li class="breadcrumb-item" aria-current="page"><?=(isset($_GET['id']) ? 'Ubah':'Tambah')?></li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title"><?=(isset($_GET['id']) ? 'Ubah':'Tambah')?> Data Materi</h6>

				<form class="forms-sample" action="?hal=materi/proses" method="POST" enctype="multipart/form-data">
					
					<input type="hidden" class="form-control" name="idmateri" value="<?=@$idmateri?>">

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Judul Materi</label>
						<div class="col-sm-9">
							<input type="text" 
                            class="form-control" 
                            name="judul" 
                            value="<?=@$judul?>" 
                            placeholder="Inputkan Judul Materi" 
                            required>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Program</label>
						<div class="col-sm-9">
							<select 
								class="form-control js-example-basic-single" 
								name="idprogram" 
								required="">
								<?php
								$no=0;
								$sql="SELECT * FROM tb_program";
								foreach (_dataGetAll($mysqli,$sql) as $key => $value):
									?>
									<option 
									value="<?=$value['idprogram']?>" 
									<?=isselect(@$idprogram,$value['idprogram'])?>>
									<?=$value['nama']?>
									</option>
								<?php endforeach; ?>
							</select>
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
						<label for="input" class="col-sm-3 col-form-label">Link</label>
						<div class="col-sm-9">
							<input type="url" 
                            class="form-control" 
                            name="link" 
                            value="<?=@$link?>" 
                            placeholder="Inputkan Biaya Daftar" 
                            required>
						</div>
					</div>


					<div class="form-group row ">
						<div class="col-sm-9 offset-3">
							<button type="submit" class="btn btn-primary mr-2" name="<?=(isset($_GET['id']) ? 'ubah':'tambah')?>">Simpan</button>
							<a class="btn btn-light" href="?hal=materi/data">Batal</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>