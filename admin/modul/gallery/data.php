<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item" aria-current="page">Data Gallery</li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Data Gallery
					<?= _tambah("?hal=gallery/olah") ?>
				</h6>
				<div class="table-responsive">
					<table id="dataTableExample" class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Judul</th>
								<th>Foto</th>
								<th>#</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 0;
							$sql = "SELECT * FROM tb_gallery";
							foreach (_dataGetAll($mysqli, $sql) as $key => $value) :
								extract($value);
							?>
								<tr>
									<td><?= $no += 1 ?></td>
									<td><?= $judul ?></td>
									<td>
										<img src="../user/images/gallery/<?=$foto?>" class="rounded" alt="Gallery">
									</td>
									<td>
										<?= _edit("?hal=gallery/olah&id=$idgallery") ?> 
										<?= _hapus("?hal=gallery/proses&hapus=$idgallery") ?>
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