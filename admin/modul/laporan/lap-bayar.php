<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center text-header">Rumah Belajar Sragen</h3>
                <h6 class="text-center text-header">Laporan Pembayaran</h6>
                <p class="text-center">Periode : <?= tgl_indo($_POST['par1']); ?> s/d <?= tgl_indo($_POST['par2']); ?></p>
                <div class="table-responsive">
                    <table id="" class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>Asal Sekolah</th>
                                <th>Alamat</th>
                                <th>Nama Orangtua</th>
                                <th>No HP Orangtua</th>
                                <th>Program</th>
                                <th>Biaya Daftar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 0;
                            $total = 0;

                         $sql = "SELECT *,tb_siswa.nama as namasiswa,tb_program.nama as namaprogram FROM tb_siswa join tb_siswa_daftar using (iddaftar) join tb_program using(idprogram) where  tanggalbayar between '" . $_POST['par1'] . "' and '" . $_POST['par2'] . "' and statusbayar='Lunas'";
                            foreach (_dataGetAll($mysqli, $sql) as $key => $value) :
                                extract($value);
                            ?>
                                <tr>
                                    <td><?= $no += 1 ?></td>
                                    <td><?= $namasiswa; ?></td>
                                    <td><?= $sekolahasal; ?></td>
                                    <td><?= $alamat; ?></td>
                                    <td><?= $namaortu; ?></td>
                                    <td><?= $nohportu;?></td>
                                    <td><?= $namaprogram; ?></td>
                                    <td><?= number_format($dibayar, 0);
                                        $total += ($dibayar); ?></td>
                                </tr>
                            <?php endforeach; ?>
                            <tr>
                                <th colspan="7">Total</th>
                                <th><?= number_format($total, 0) ?></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>