<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item" aria-current="page">Data Pendaftaran Siswa</li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">
					<div class="row">
					 <div class="col-sm-3">Data pendaftaran Siswa
							
						</div>

					 <div class="col-sm-4">
						<select class="select2 w-100" name="jk">
                             
                                    <option value="Pilih Mater">- Pilih Materi-</option>
                               
                         </select>
                     </div>
                     <div class="col-sm-4">
					<?= _cari("?hal=dataset/import") ?>
					<?= _tambah("?hal=dataset/import") ?>
				</div>
				
				</div>
				</h6>
				<div class="table-responsive">
					<table id="dataTableExample" class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Tempat, Tgl Lahir</th>
								<th>Email</th>
								<th>Status Daftar</th>
								<th>#</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 0;
							$sql = "SELECT * FROM  tb_siswa";
							foreach (_dataGetAll($mysqli, $sql) as $key => $value) :
								extract($value);
							?>
								<tr>
									<td><?= $no += 1 ?></td>
									<td><?= $nama ?></td>
									<td><?= $tempatlahir.", ". tgl_indo($tanggallahir) ?></td>
									<td><?= $email ?></td>
									<td><?= $statusdaftar ?></td>
									<td>
										<?= _detail("?hal=materi/proses&hapus=$iddaftar") ?>
										<?= _edit("?hal=materi/olah&id=$iddaftar") ?> 
										<?= _hapus("?hal=materi/olah&id=$iddaftar") ?> 
										
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>