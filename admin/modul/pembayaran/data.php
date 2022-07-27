<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item" aria-current="page">Data pembayaran Siswa</li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">
					<div class="row">
					 <div class="col-sm-3">Data Pembayaran Siswa
							
					</div>
					 <div class="col-sm-4">
						<select class="select2 w-100" name="jenis">
                           	<option value="Pilih Mater">- Pilih Pembayaran-</option>
                         </select>
                     </div>
                     <div class="col-sm-4">
					<?= _cari("?hal=dataset/import") ?>
					<?= _tambah("?hal=pembayaran/olah") ?>
				</div>
				
				</div>
				</h6>
				<div class="table-responsive">
					<table id="dataTableExample" class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Tanggal Bayar</th>
								<th>Nama Paket</th>
								<th>Dibayar</th>
								<th>Jenis Bayar</th>
								<th>#</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 0;
							$sql = "SELECT *, tb_siswa.nama as namasiswa FROM  tb_siswa join tb_siswa_daftar using(iddaftar) join tb_program using(idprogram)";
							foreach (_dataGetAll($mysqli, $sql) as $key => $value) :
								extract($value);
							?>
								<tr>
									<td><?= $no += 1 ?></td>
									<td><?= $namasiswa ?></td>
									<td><?= tgl_indo($tanggalbayar) ?></td>
									<td><?= $nama ?></td>
									<td><?= $dibayar ?></td>
									<td><?= $jenisbayar ?></td>
									<td>
										<?php if($jenisbayar=='Online'){ ?>
											<?= _edit("?hal=pembayaran/ubah&id=$iddaftarpaket")?> 
										<?php } ?>

										<?= _hapus("?hal=pembayaran/proses&hapus=$iddaftarpaket") ?>
										
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