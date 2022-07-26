<?php
	extract(_dataGetId($mysqli,"tb_siswa","iddaftar='1'"));
?>
<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item"><a href="?hal=karyawan/data">Profil Siswa</a></li>
		<li class="breadcrumb-item" aria-current="page">Ubah</li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Profil Siswa</h6>

				<form class="forms-sample" action="?hal=karyawan/proses" method="POST" enctype="multipart/form-data">
					
					<input type="hidden" class="form-control" name="idkaryawan" value="<?=@$idkaryawan?>">

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Nama Siswa</label>
						<div class="col-sm-9">
							<input type="text" 
							class="form-control" 
							name="noinduk" 
							value="<?=@$nama?>" 
							placeholder="No Induk Karaywan"
							required>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Tempat Lahir</label>
						<div class="col-sm-9">
							<input type="text" 
                            class="form-control" 
                            name="namakaryawan" 
                            value="<?=@$tempatlahir?>" 
                            placeholder="Inputkan Nama Karyawan" 
                            required>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Tanggal Lahir</label>
						<div class="col-sm-9">
							<input type="date" 
                            class="form-control" 
                            name="namakaryawan" 
                            value="<?=@$tanggallahir?>" 
                            placeholder="Inputkan Nama Karyawan" 
                            required>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Jenis Kelamin</label>
						<div class="col-sm-9">
							<input type="text" 
                            class="form-control" 
                            name="namakaryawan" 
                            value="<?=@$jk?>" 
                            placeholder="Inputkan Nama Karyawan" 
                            required>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Nama Orangtua</label>
						<div class="col-sm-9">
							<input type="text" 
                            class="form-control" 
                            name="namakaryawan" 
                            value="<?=@$namaortu?>" 
                            placeholder="Inputkan Nama Karyawan" 
                            required>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">No Hp Orangtua</label>
						<div class="col-sm-9">
							<input type="text" 
                            class="form-control" 
                            name="namakaryawan" 
                            value="<?=@$nohportu?>" 
                            placeholder="Inputkan Nama Karyawan" 
                            required>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Asal Sekolah</label>
						<div class="col-sm-9">
							<input type="text" 
                            class="form-control" 
                            name="namakaryawan" 
                            value="<?=@$sekolahasal?>" 
                            placeholder="Inputkan Nama Karyawan" 
                            required>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Email</label>
						<div class="col-sm-9">
							<input type="text" 
                            class="form-control" 
                            name="namakaryawan" 
                            value="<?=@$email?>" 
                            placeholder="Inputkan Nama Karyawan" 
                            required>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Alamat</label>
						<div class="col-sm-9">
							<input type="text" 
                            class="form-control" 
                            name="namakaryawan" 
                            value="<?=@$alamat?>" 
                            placeholder="Inputkan Nama Karyawan" 
                            required>
						</div>
					</div>

					<div class="form-group row">

					<label for="input" class="col-sm-3 col-form-label">Foto</label>
					<?php if(isset($_GET['id'])){ ?>
						<img src="../file/<?=$fotokaryawan?>" style="width: 300px;" class="rounded float-left" alt="">
					<?php } ?>
						<div class="col-sm-9">
							<input type="file" 
                            class="form-control" 
                            name="fotokaryawan"  
                            placeholder="Inputkan Gambar">
						</div>
					</div>


					<div class="form-group row ">
						<div class="col-sm-9 offset-3">
							<button type="submit" class="btn btn-primary mr-2" name="<?=(isset($_GET['id']) ? 'ubah':'tambah')?>">Simpan</button>
							<a class="btn btn-light" href="?hal=karyawan/data">Batal</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>