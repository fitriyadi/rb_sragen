<?php
if (isset($_POST['tambah'])) {
	//Proses penambahan index
	if ($_FILES['gallery']['tmp_name'] != "") {
		$temp = $_FILES['gallery']['tmp_name'];
		$name = $_FILES['gallery']['name'];
		$size = $_FILES['gallery']['size'];
		$type = $_FILES['gallery']['type'];
		$folder = '../user/images/gallery/';
		$name = date('Y-m-d h:i:s') . $_FILES['gallery']['name'];
		move_uploaded_file($temp, $folder . $name);
	} else {
		$name = "default.jpg";
	}

	$stmt = $mysqli->prepare("INSERT INTO tb_gallery 
		(judul,foto) 
		VALUES (?,?)");

	$stmt->bind_param(
		"ss",
		$_POST['judul'],
		$name
	);

	if ($stmt->execute()) {
		echo "<script>alert('Data gallery berhasil disimpan')</script>";
		echo "<script>window.location='index.php?hal=gallery/data';</script>";
	} else {
		echo "<script>alert('Data gallery Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}
} else if (isset($_POST['ubah'])) {

	//Proses ubah data
	$name = _dataCustom($mysqli, "select foto from tb_gallery where idgallery='" . $_POST['idgallery'] . "'");
	if ($_FILES['gallery']['tmp_name'] != "") {
		$temp = $_FILES['gallery']['tmp_name'];
		$name = $_FILES['gallery']['name'];
		$size = $_FILES['gallery']['size'];
		$type = $_FILES['gallery']['type'];
		$folder = "../user/images/gallery/";
		$name = date('Y-m-d h:i:s').$_FILES['gallery']['name'];
		move_uploaded_file($temp, $folder.$name);
	}

	$stmt = $mysqli->prepare("UPDATE tb_gallery  SET 
		judul=?,
		foto=?
		where idgallery=?");
	$stmt->bind_param(
		"sss",
		$_POST['judul'],
		$name,
		$_POST['idgallery']
	);

	if ($stmt->execute()) {
		echo "<script>alert('Data gallery berhasil diubah')</script>";
		echo "<script>window.location='index.php?hal=gallery/data';</script>";
	} else {
		echo "<script>alert('Data gallery Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}
} else if (isset($_GET['hapus'])) {

	//Proses hapus
	$stmt = $mysqli->prepare("DELETE FROM tb_gallery where idgallery=?");
	$stmt->bind_param("s", $_GET['hapus']);
	if ($stmt->execute()) {
		echo "<script>alert('Data gallery Berhasil Dihapus')</script>";
		echo "<script>window.location='index.php?hal=gallery/data';</script>";
	} else {
		echo "<script>alert('Data gallery Gagal Dihapus')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}
} 

?>
