<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
	<div>
		<h4 class="mb-3 mb-md-0">Selamat Datang...</h4>
	</div>
</div>

<div class="row">
	<div class="col-12 col-xl-12 stretch-card">
		<div class="row flex-grow">
			<div class="col-md-4 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<div class="d-flex justify-content-between align-items-baseline">
							<h6 class="card-title mb-0">Data Pendaftar</h6>
							<div class="dropdown mb-2">
								<button class="btn p-0" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
									<a class="dropdown-item d-flex align-items-center" href="?hal=pendaftaran/data"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-6 col-md-12 col-xl-5">
								<h3 class="mb-2"><?=_dataCount($mysqli,"select * from tb_siswa")?></h3>
							</div>
							<div class="col-6 col-md-12 col-xl-7">
								<div id="apexChart1" class="mt-md-3 mt-xl-0"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<div class="d-flex justify-content-between align-items-baseline">
							<h6 class="card-title mb-0">Data Program</h6>
							<div class="dropdown mb-2">
								<button class="btn p-0" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
									<a class="dropdown-item d-flex align-items-center" href="?hal=program/data"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-6 col-md-12 col-xl-5">
								<h3 class="mb-2"><?=_dataCount($mysqli,"select * from tb_program")?></h3>
							</div>
							<div class="col-6 col-md-12 col-xl-7">
								<div id="apexChart2" class="mt-md-3 mt-xl-0"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
						<div class="col-md-4 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<div class="d-flex justify-content-between align-items-baseline">
							<h6 class="card-title mb-0">Data Pembayaran</h6>
							<div class="dropdown mb-2">
								<button class="btn p-0" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
									<a class="dropdown-item d-flex align-items-center" href="?hal=pembayaran/data"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">View</span></a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-6 col-md-12 col-xl-5">
								<h3 class="mb-2"><?=_dataCount($mysqli,"select * from tb_siswa_daftar")?></h3>
							</div>
							<div class="col-6 col-md-12 col-xl-7">
								<div id="apexChart2" class="mt-md-3 mt-xl-0"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> <!-- row -->
