<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item" aria-current="page">Data Pendafatran Paket</li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">
					<?= _tambah("?hal=pembayaran/olah") ?>

				</h6>
				<div class="table-responsive">
					<table id="dataTableExample" class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Tanggal Bayar</th>
								<th>Nama Paket</th>
								<th>Dibayar</th>
								<th>Jenis Bayar</th>
								<th>Status Bayar</th>
								<th>#</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 0;
							$iddaftar=$_SESSION['siswa'];
							$sql = "SELECT *, tb_siswa.nama as namasiswa FROM  tb_siswa join tb_siswa_daftar using(iddaftar) join tb_program using(idprogram) where iddaftar='$iddaftar'";
							foreach (_dataGetAll($mysqli, $sql) as $key => $value) :
								extract($value);
							?>
								<tr>
									<td><?= $no += 1 ?></td>
									<td><?= tgl_indo($tanggalbayar) ?></td>
									<td><?= $nama ?></td>
									<td><?= $dibayar ?></td>
									<td><?= $jenisbayar ?></td>
									<td><?= $statusbayar ?></td>
									<td>
										<?= _detail("?hal=materi/olah&id=$iddaftarpaket") ?> 
										
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