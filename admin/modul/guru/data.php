<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item" aria-current="page">Data Guru</li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Data Guru
					<?= _tambah("?hal=guru/olah") ?>
				</h6>
				<div class="table-responsive">
					<table id="dataTableExample" class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Pendidikan</th>
								<th>Deskripsi</th>
								<th>Gambar</th>
								<th>#</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 0;
							$sql = "SELECT * FROM tb_guru";
							foreach (_dataGetAll($mysqli, $sql) as $key => $value) :
								extract($value);
							?>
								<tr>
									<td><?= $no += 1 ?></td>
									<td><?= $nama ?></td>
									<td><?= $pendidikan ?></td>
									<td style="word-break:break-word"><?=  mb_strimwidth($deskripsi, 0, 50, " ...") ?></td>
									<td>
										<img src="../user/images/guru/<?=$foto?>" class="rounded" alt="Foto">
									</td>
									<td>
										<?= _edit("?hal=guru/olah&id=$idguru") ?> 
										<?= _hapus("?hal=guru/proses&hapus=$idguru") ?>
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