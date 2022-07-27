<?php
$username="";
if(isset($_GET['id']))
	extract(_dataGetId($mysqli,"tb_siswa","iddaftar='".$_GET['id']."'"));
?>
<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item"><a href="?hal=kriteria/data">Data Pendaftaran</a></li>
		<li class="breadcrumb-item" aria-current="page"><?=(isset($_GET['id']) ? 'Ubah':'Tambah')?></li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title"><?=(isset($_GET['id']) ? 'Ubah':'Tambah')?> Data Siswa Daftar</h6>

				<form class="forms-sample" action="?hal=pendaftaran/proses" method="POST" enctype="multipart/form-data">
					
					<input type="hidden" class="form-control" name="iddaftar" value="<?=@$iddaftar?>">

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Nama Siswa</label>
						<div class="col-sm-9">
							<input type="text" 
                            class="form-control" 
                            name="nama" 
                            value="<?=@$nama?>" 
                            placeholder="Inputkan Nama Siswa" 
                            required>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Tempat Lahir</label>
						<div class="col-sm-9">
							<input type="text" 
                            class="form-control" 
                            name="tempatlahir" 
                            value="<?=@$tempatlahir?>" 
                            placeholder="Inputkan Tempat Lahir" 
                            required>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Tanggal Lahir</label>
						<div class="col-sm-9">
							<input type="date" 
                            class="form-control" 
                            name="tanggallahir" 
                            value="<?=@$tanggallahir?>" 
                            placeholder="Inputkan tanggal Lahir" 
                            required>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Jenis Kelamin</label>
						<div class="col-sm-9">
							<select 
								class="form-control select2" 
								name="jk" 
								required="">
								<?php
								foreach ($_array_jk as $key => $value):
									?>
									<option 
									value="<?=$key?>"
									<?=isselect(@$jk,$value)?>>
									<?=$value?>
									</option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Agama</label>
						<div class="col-sm-9">
							<select 
								class="form-control select2" 
								name="agama" 
								required="">
								<?php
								foreach ($_array_agama as $key => $value):
									?>
									<option 
									value="<?=$key?>"
									<?=isselect(@$agama,$value)?>>
									<?=$value?>
									</option>
								<?php endforeach; ?>
							</select>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Asal Sekolah</label>
						<div class="col-sm-9">
							<input type="text" 
                            class="form-control" 
                            name="sekolahasal" 
                            value="<?=@$sekolahasal?>" 
                            placeholder="Inputkan Asal Sekolah" 
                            required>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Nama Orangtua</label>
						<div class="col-sm-9">
							<input type="text" 
                            class="form-control" 
                            name="namaortu" 
                            value="<?=@$namaortu?>" 
                            placeholder="Inputkan Nama Orangtua" 
                            required>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">No Hp orangtua</label>
						<div class="col-sm-9">
							<input type="number" 
                            class="form-control" 
                            name="nohportu" 
                            value="<?=@$nohportu?>" 
                            placeholder="Inputkan No Hp Orangtua" 
                            required>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Email</label>
						<div class="col-sm-9">
							<input type="text" 
                            class="form-control" 
                            name="email" 
                            value="<?=@$email?>" 
                            placeholder="Inputkan Email" 
                            required>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Password</label>
						<div class="col-sm-9">
							<input type="text" 
                            class="form-control" 
                            name="password" 
                            value="<?=@$password?>" 
                            placeholder="Inputkan Password" 
                            required>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Alamat</label>
						<div class="col-sm-9">
							<textarea 
							class="form-control"
							rows="3"
							name="alamat"
							placeholder="Inputkan Alamat" 
							required><?=@$alamat?></textarea>
						</div>
					</div>


					<div class="form-group row">
					<label for="input" class="col-sm-3 col-form-label">Foto</label>
					<?php if(isset($_GET['id'])){ ?>
						<div class="col-sm-3">
						<img src="../foto-siswa/<?=$foto?>" style="width: 100px;" class="rounded float-left" alt="">
						</div>
					<?php } ?>
						<div class="col-sm-3">
							<input type="file" 
                            class="form-control" 
                            name="fotosiswa"  
                            placeholder="Inputkan Gambar">
						</div>
					</div>


					<div class="form-group row ">
						<div class="col-sm-9 offset-3">
							<button type="submit" class="btn btn-primary mr-2" name="<?=(isset($_GET['id']) ? 'ubah':'tambah')?>">Simpan</button>
							<a class="btn btn-light" href="?hal=pendaftaran/data">Batal</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>