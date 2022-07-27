<?php
$iduser=$_SESSION['admin'];
$tanggal=date('Y-m-d');

if (isset($_POST['tambah'])) {
	//Proses penambahan index
	if ($_FILES['fotoblog']['tmp_name'] != "") {
		$temp = $_FILES['fotoblog']['tmp_name'];
		$name = $_FILES['fotoblog']['name'];
		$size = $_FILES['fotoblog']['size'];
		$type = $_FILES['fotoblog']['type'];
		$folder = '../user/images/blog/';
		$name = date('Y-m-d h:i:s') . $_FILES['fotoblog']['name'];
		move_uploaded_file($temp, $folder . $name);
	} else {
		$name = "default.jpg";
	}

	$stmt = $mysqli->prepare("INSERT INTO tb_blog 
		(judul,jenis,foto,isi,tanggal,idpengguna) 
		VALUES (?,?,?,?,?,?)");

	$stmt->bind_param(
		"ssssss",
		$_POST['judul'],
		$_POST['jenis'],
		$name,
		$_POST['isi'],
		$tanggal,
		$iduser
	);

	if ($stmt->execute()) {
		echo "<script>alert('Data blog berhasil disimpan')</script>";
		echo "<script>window.location='index.php?hal=blog/data';</script>";
	} else {
		echo "<script>alert('Data blog Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}
} else if (isset($_POST['ubah'])) {

	//Proses ubah data
	$name = _dataCustom($mysqli, "select foto from tb_blog where idblog='" . $_POST['idblog'] . "'");
	if ($_FILES['fotoblog']['tmp_name'] != "") {
		$temp = $_FILES['fotoblog']['tmp_name'];
		$name = $_FILES['fotoblog']['name'];
		$size = $_FILES['fotoblog']['size'];
		$type = $_FILES['fotoblog']['type'];
		$folder = "../user/images/blog/";
		$name = date('Y-m-d h:i:s').$_FILES['fotoblog']['name'];
		move_uploaded_file($temp, $folder.$name);
	}

	$stmt = $mysqli->prepare("UPDATE tb_blog  SET 
		judul=?,
		jenis=?,
		foto=?,
		isi=?
		where idblog=?");
	$stmt->bind_param(
		"sssss",
		$_POST['judul'],
		$_POST['jenis'],
		$name,
		$_POST['isi'],
		$_POST['idblog']
	);

	if ($stmt->execute()) {
		echo "<script>alert('Data blog berhasil diubah')</script>";
		echo "<script>window.location='index.php?hal=blog/data';</script>";
	} else {
		echo "<script>alert('Data blog Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}
} else if (isset($_GET['hapus'])) {

	//Proses hapus
	$stmt = $mysqli->prepare("DELETE FROM tb_blog where idblog=?");
	$stmt->bind_param("s", $_GET['hapus']);
	if ($stmt->execute()) {
		echo "<script>alert('Data blog Berhasil Dihapus')</script>";
		echo "<script>window.location='index.php?hal=blog/data';</script>";
	} else {
		echo "<script>alert('Data blog Gagal Dihapus')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}
} 

?>
