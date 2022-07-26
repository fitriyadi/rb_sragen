<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item" aria-current="page">Data Profil</li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Data Profil RB -Sragen
					<?= _tambah("?hal=profil/olah") ?>
				</h6>
				<?php
				$no=0;
				$sql="SELECT * FROM tb_profil";
				foreach (_dataGetAll($mysqli,$sql) as $key => $value) :
					extract($value);
					?>
					<div class="card mb-4">
						<h5 class="card-header text-white bg-secondary"><?=$judul?></h5>
						<div class="card-body">
							<h5 class="card-title">Isi:</h5>
							<p class="card-text"><?=$isi?></p>
							<hr>

							<?= _edit("?hal=profil/olah&id=$idprofil") ?>
							<?= _hapus("?hal=profil/proses&hapus=$idprofil") ?>
						</div>
					</div>


				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>

