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
					<div class="row">
					 <div class="col-sm-3">Data Materi Siswa</div>
					 <div class="col-sm-4">
						<select class="select2 w-100" name="idprogram">
                            <option value="Pilih Mater">- Semua Materi -</option>
                         </select>
                     </div>
                     <div class="col-sm-4">
					<?= _cari("?hal=dataset/import") ?>
					
					<?= _tambah("?hal=materi/olah") ?>
				</div>
				
				</div>
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
							$sql = "SELECT * FROM  tb_program join tb_materi using(idprogram)";
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
										<?= _edit("?hal=materi/olah&id=$idmateri") ?> 
										<?= _hapus("?hal=materi/proses&hapus=$idmateri") ?>
										
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