<?php
$iduser=$_SESSION['admin'];
$tanggal=date('Y-m-d');

if (isset($_POST['tambah'])) {
	//Proses penambahan index
	$stmt = $mysqli->prepare("INSERT INTO tb_materi 
		(link,idprogram,judul,deskripsi,tanggal,idpengguna) 
		VALUES (?,?,?,?,?,?)");

	$stmt->bind_param(
		"ssssss",
		$_POST['link'],
		$_POST['idprogram'],
		$_POST['judul'],
		$_POST['deskripsi'],
		$tanggal,
		$iduser
	);

	if ($stmt->execute()) {
		echo "<script>alert('Data materi berhasil ddeskripsimpan')</script>";
		echo "<script>window.location='index.php?hal=materi/data';</script>";
	} else {
		echo "<script>alert('Data materi Gagal Ddeskripsimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}
} else if (isset($_POST['ubah'])) {

	//Proses ubah data

	$stmt = $mysqli->prepare("UPDATE tb_materi  SET 
		link=?,
		idprogram=?,
		judul=?,
		deskripsi=?
		where idmateri=?");
	$stmt->bind_param(
		"sssss",
		$_POST['link'],
		$_POST['idprogram'],
		$_POST['judul'],
		$_POST['deskripsi'],
		$_POST['idmateri']
	);

	if ($stmt->execute()) {
		echo "<script>alert('Data materi berhasil diubah')</script>";
		echo "<script>window.location='index.php?hal=materi/data';</script>";
	} else {
		echo "<script>alert('Data materi Gagal Ddeskripsimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}
} else if (isset($_GET['hapus'])) {

	//Proses hapus
	$stmt = $mysqli->prepare("DELETE FROM tb_materi where idmateri=?");
	$stmt->bind_param("s", $_GET['hapus']);
	if ($stmt->execute()) {
		echo "<script>alert('Data materi Berhasil Dihapus')</script>";
		echo "<script>window.location='index.php?hal=materi/data';</script>";
	} else {
		echo "<script>alert('Data materi Gagal Dihapus')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}
} 

?>
