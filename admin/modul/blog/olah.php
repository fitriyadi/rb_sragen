<?php
$username="";
if(isset($_GET['id']))
	extract(_dataGetId($mysqli,"tb_blog","idblog='".$_GET['id']."'"));
?>
<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item"><a href="?hal=kriteria/data">Data Blog</a></li>
		<li class="breadcrumb-item" aria-current="page"><?=(isset($_GET['id']) ? 'Ubah':'Tambah')?></li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title"><?=(isset($_GET['id']) ? 'Ubah':'Tambah')?> Data Blog</h6>

				<form class="forms-sample" action="?hal=blog/proses" method="POST" enctype="multipart/form-data">
					
					<input type="hidden" class="form-control" name="idblog" value="<?=@$idblog?>">

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Judul</label>
						<div class="col-sm-9">
							<input type="text" 
                            class="form-control" 
                            name="judul" 
                            value="<?=@$judul?>" 
                            placeholder="Inputkan judul blog" 
                            required>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Jenis</label>
						<div class="col-sm-9">
							<select 
								class="form-control select2" 
								name="jenis" 
								required="">
								<?php
								foreach ($_array_jenis as $key => $value):
									?>
									<option 
									value="<?=$key?>"
									<?=isselect(@$jenis,$value)?>>
									<?=$value?>
									</option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Isi</label>
						<div class="col-sm-9">
							<textarea 
							class="form-control"
							rows="3"
							name="isi"
							id="tinymceExample"
							placeholder="Inputkan Deskripsi" 
							required><?=@$isi?></textarea>
						</div>
					</div>


					<div class="form-group row">
					<label for="input" class="col-sm-3 col-form-label">Gambar</label>
					<?php if(isset($_GET['id'])){ ?>
						<div class="col-sm-3">
						<img src="../user/images/blog/<?=$foto?>" style="width: 100px;" class="rounded float-left" alt="">
						</div>
					<?php } ?>
						<div class="col-sm-3">
							<input type="file" 
                            class="form-control" 
                            name="fotoblog"  
                            placeholder="Inputkan Gambar">
						</div>
					</div>


					<div class="form-group row ">
						<div class="col-sm-9 offset-3">
							<button type="submit" class="btn btn-primary mr-2" name="<?=(isset($_GET['id']) ? 'ubah':'tambah')?>">Simpan</button>
							<a class="btn btn-light" href="?hal=blog/data">Batal</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>