<?php

function _proses($link){
	echo "<a href='$link' class='btn btn-success btn-sm float-right'>Proses Sentimen</a>";
}

function _download($link){
	echo "<a href='$link' class='btn btn-primary btn-sm'>Download</a>";
}

function _khs($link){
	echo "<a href='$link' class='btn btn-success btn-sm'>KHS</a>";
}

function _cari($link){
	echo "<a href='$link' class='btn btn-primary btn-sm'>Cari</a>";
}

function _edit($link){
	echo "<a href='$link' class='btn btn-secondary btn-sm'>Edit</a>";
}

function _detail($link){
	echo "<a href='$link' class='btn btn-primary btn-sm'>Detail</a>";
}

function _tambah($link){
	echo "<a href='$link' class='btn btn-primary btn-sm float-right'>Tambah</a>";
}

function _hapus($link){ ?>
	<a class="btn btn-danger btn-sm" href="<?=$link?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Hapus</a>
<?php }

function _reset($link){ ?>
	<a class="btn btn-warning btn-sm" href="<?=$link?>" onclick="return confirm('Apakah anda yakin akan mereset password?')">Reset</a>
<?php }


?>