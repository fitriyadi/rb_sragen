<?php
if (isset($_POST['tambah'])) {
	//Proses penambahan index
	if ($_FILES['fotoguru']['tmp_name'] != "") {
		$temp = $_FILES['fotoguru']['tmp_name'];
		$name = $_FILES['fotoguru']['name'];
		$size = $_FILES['fotoguru']['size'];
		$type = $_FILES['fotoguru']['type'];
		$folder = '../user/images/guru/';
		$name = date('Y-m-d h:i:s') . $_FILES['fotoguru']['name'];
		move_uploaded_file($temp, $folder . $name);
	} else {
		$name = "default.jpg";
	}

	$stmt = $mysqli->prepare("INSERT INTO tb_guru 
		(nama,pendidikan,foto,deskripsi) 
		VALUES (?,?,?,?)");

	$stmt->bind_param(
		"ssss",
		$_POST['nama'],
		$_POST['pendidikan'],
		$name,
		$_POST['deskripsi']
	);

	if ($stmt->execute()) {
		echo "<script>alert('Data guru berhasil disimpan')</script>";
		echo "<script>window.location='index.php?hal=guru/data';</script>";
	} else {
		echo "<script>alert('Data guru Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}
} else if (isset($_POST['ubah'])) {

	//Proses ubah data
	$name = _dataCustom($mysqli, "select foto from tb_guru where idguru='" . $_POST['idguru'] . "'");
	if ($_FILES['fotoguru']['tmp_name'] != "") {
		$temp = $_FILES['fotoguru']['tmp_name'];
		$name = $_FILES['fotoguru']['name'];
		$size = $_FILES['fotoguru']['size'];
		$type = $_FILES['fotoguru']['type'];
		$folder = "../user/images/guru/";
		$name = date('Y-m-d h:i:s').$_FILES['fotoguru']['name'];
		move_uploaded_file($temp, $folder.$name);
	}

	$stmt = $mysqli->prepare("UPDATE tb_guru  SET 
		nama=?,
		pendidikan=?,
		foto=?,
		deskripsi=?
		where idguru=?");
	$stmt->bind_param(
		"sssss",
		$_POST['nama'],
		$_POST['pendidikan'],
		$foto,
		$_POST['deskripsi'],
		$_POST['idguru']
	);

	if ($stmt->execute()) {
		echo "<script>alert('Data guru berhasil diubah')</script>";
		echo "<script>window.location='index.php?hal=guru/data';</script>";
	} else {
		echo "<script>alert('Data guru Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}
} else if (isset($_GET['hapus'])) {

	//Proses hapus
	$stmt = $mysqli->prepare("DELETE FROM tb_guru where idguru=?");
	$stmt->bind_param("s", $_GET['hapus']);
	if ($stmt->execute()) {
		echo "<script>alert('Data guru Berhasil Dihapus')</script>";
		echo "<script>window.location='index.php?hal=guru/data';</script>";
	} else {
		echo "<script>alert('Data guru Gagal Dihapus')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}
} 

?>
