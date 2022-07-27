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
				<h6 class="card-title">Data pendaftaran Siswa
							
					<?= _tambah("?hal=pendaftaran/olah") ?>
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
									<td><?= label_status_daftar($statusdaftar) ?></td>
									<td>
										<?= _detail("?hal=pendaftaran/detail&id=$iddaftar") ?> 
										<?= _edit("?hal=pendaftaran/olah&id=$iddaftar") ?> 
										<?= _hapus("?hal=pendaftaran/proses&hapus=$iddaftar") ?>
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