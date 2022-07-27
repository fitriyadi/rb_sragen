<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item" aria-current="page">Data Materi Siswa</li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">
					 Data Materi Siswa
				
				
				</h6>
				<div class="table-responsive">
					<table id="dataTableExample" class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Program</th>
								<th>Judul Materi</th>
								<th>Tanggal</th>
								<th>Deskripsi</th>
								<th>#</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 0;
							$kode=$_SESSION['siswa'];
							$sql = "SELECT * FROM  tb_program join tb_materi using(idprogram) join tb_siswa_daftar using(idprogram) join tb_siswa using(iddaftar) where iddaftar='$kode'";
							foreach (_dataGetAll($mysqli, $sql) as $key => $value) :
								extract($value);
							?>
								<tr>
									<td><?= $no += 1 ?></td>
									<td><?= $nama ?></td>
									<td><?= $judul ?></td>
									<td><?= tgl_indo($tanggal) ?></td>
									<td><?=  mb_strimwidth($deskripsi, 0, 30, " ...") ?></td>
									<td>
										<?= _download($link) ?>
										
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