<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item" aria-current="page">Data Blog</li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Data Blog
					<?= _tambah("?hal=dataset/import") ?>
				</h6>
				<div class="table-responsive">
					<table id="dataTableExample" class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Judul</th>
								<th>Tanggal</th>
								<th>Jenis</th>
								<th>Isi</th>
								<th>Gambar</th>
								<th>#</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 0;
							$sql = "SELECT * FROM tb_blog";
							foreach (_dataGetAll($mysqli, $sql) as $key => $value) :
								extract($value);
							?>
								<tr>
									<td><?= $no += 1 ?></td>
									<td><?= $judul ?></td>
									<td><?= tgl_indo($tanggal) ?></td>
									<td><?= $jenis ?></td>
									<td><?=  mb_strimwidth($isi, 0, 50, " ...") ?></td>
									<td>
										<img src="../user/images/blog/<?=$foto?>" class="rounded" alt="Foto">
									</td>
									<td>
										<?= _edit("?hal=blog/olah&id=$idblog") ?> 
										<?= _hapus("?hal=blog/proses&hapus=$idblog") ?>
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