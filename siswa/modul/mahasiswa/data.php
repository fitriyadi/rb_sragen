<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item" aria-current="page">Data Mahasiswa</li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Data Mahasiswa
				</h6>
				<div class="table-responsive">
					<table id="dataTableExample" class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Nim</th>
								<th>Nama</th>
								<th>Program Studi</th>
								<th>IPK</th>
								<th>#</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 0;
							$sql = "SELECT * FROM tb_mahasiswa where jenismenu='master'";
							foreach (_dataGetAll($mysqli, $sql) as $key => $value) :
								extract($value);
							?>
								<tr>
									<td><?= $no += 1 ?></td>
									<td><?= $nim ?></td>
									<td><?= $nama ?></td>
									<td><?= $programstudi ?></td>
									<td><?= $ipk ?></td>
									<td>
										<?= _khs("?hal=mahasiswa/olah&id=$nim") ?> 
										<?= _transkrip("?hal=mahasiswa/proses&hapus=$nim") ?>
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