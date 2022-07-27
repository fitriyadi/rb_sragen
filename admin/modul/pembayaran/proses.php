<?php
$iduser=$_SESSION['admin'];
$tanggal=date('Y-m-d');

if (isset($_POST['tambah'])) {
	//Proses penambahan index
	$idprogram=$_POST['idprogram'];
	$dibayar=_dataCustom($mysqli,"select biayadaftar from tb_program where idprogram='$idprogram'");
	$jenisbayar="Langsung";
	$statusbayar="Lunas";

	$stmt = $mysqli->prepare("INSERT INTO tb_siswa_daftar 
		(iddaftar,idprogram,tanggalbayar,dibayar,jenisbayar,statusbayar) 
		VALUES (?,?,?,?,?,?)");

	$stmt->bind_param(
		"ssssss",
		$_POST['iddaftar'],
		$_POST['idprogram'],
		$_POST['tanggal'],
		$dibayar,
		$jenisbayar,
		$statusbayar
	);

	if ($stmt->execute()) {
		echo "<script>alert('Data pembayaran berhasil disimpan')</script>";
		echo "<script>window.location='index.php?hal=pembayaran/data';</script>";
	} else {
		echo "<script>alert('Data pembayaran Gagal Ddeskripsimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

 }else if (isset($_POST['ubah'])) {

	//Proses ubah data

	$stmt = $mysqli->prepare("UPDATE tb_siswa_daftar  SET 
		statusbayar=?
		where iddaftarpaket=?");
	$stmt->bind_param(
		"ss",
		$_POST['status'],
		$_POST['iddaftarpaket']
	);

	if ($stmt->execute()) {
		echo "<script>alert('Data pembayaran berhasil diubah')</script>";
		echo "<script>window.location='index.php?hal=pembayaran/data';</script>";
	} else {
		echo "<script>alert('Data pembayaran Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}
}else if (isset($_GET['hapus'])) {

	//Proses hapus
	$stmt = $mysqli->prepare("DELETE FROM tb_siswa_daftar where iddaftarpaket=?");
	$stmt->bind_param("s", $_GET['hapus']);
	if ($stmt->execute()) {
		echo "<script>alert('Data pembayaran Berhasil Dihapus')</script>";
		echo "<script>window.location='index.php?hal=pembayaran/data';</script>";
	} else {
		echo "<script>alert('Data pembayaran Gagal Dihapus')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}
} 

?>
