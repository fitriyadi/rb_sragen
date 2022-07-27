<?php
if (isset($_POST['tambah'])) {
	//Proses penambahan index
	if ($_FILES['fotosiswa']['tmp_name'] != "") {
		$temp = $_FILES['fotosiswa']['tmp_name'];
		$name = $_FILES['fotosiswa']['name'];
		$size = $_FILES['fotosiswa']['size'];
		$type = $_FILES['fotosiswa']['type'];
		$folder = '../foto-siswa/';
		$name = date('Y-m-d h:i:s') . $_FILES['fotosiswa']['name'];
		move_uploaded_file($temp, $folder . $name);
	} else {
		$name = "default.jpg";
	}

		$status="Langsung";
		$stmt = $mysqli->prepare("INSERT INTO tb_siswa 
			(nama,email,password,tempatlahir,tanggallahir,jk,nohportu,alamat,statusdaftar,agama,sekolahasal,namaortu,foto) 
			VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");

		$stmt->bind_param(
			"sssssssssssss",
			$_POST['nama'],
			$_POST['email'],
			$_POST['password'],
			$_POST['tempatlahir'],
			$_POST['tanggallahir'],
			$_POST['jk'],
			$_POST['nohportu'],
			$_POST['alamat'],
			$status,
			$_POST['agama'],
			$_POST['sekolahasal'],
			$_POST['namaortu'],
			$name
		);

	if ($stmt->execute()) {
		echo "<script>alert('Data Siswa berhasil disimpan')</script>";
		echo "<script>window.location='index.php?hal=pendaftaran/data';</script>";
	} else {
		echo "<script>alert('Data Siswa Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}
} else if (isset($_POST['ubah'])) {

	//Proses ubah data
	$name = _dataCustom($mysqli, "select foto from tb_siswa where iddaftar='" . $_POST['iddaftar'] . "'");
	if ($_FILES['fotosiswa']['tmp_name'] != "") {
		$temp = $_FILES['fotosiswa']['tmp_name'];
		$name = $_FILES['fotosiswa']['name'];
		$size = $_FILES['fotosiswa']['size'];
		$type = $_FILES['fotosiswa']['type'];
		$folder = '../foto-siswa/';
		$name = date('Y-m-d h:i:s').$_FILES['fotosiswa']['name'];
		move_uploaded_file($temp, $folder.$name);
	}

	$stmt = $mysqli->prepare("UPDATE tb_siswa  SET 
		nama=?,
		email=?,
		password=?,
		tempatlahir=?,
		tanggallahir=?,
		jk=?,
		nohportu=?,
		alamat=?,
		agama=?,
		sekolahasal=?,
		namaortu=?,
		foto=?
		where iddaftar=?");
	$stmt->bind_param(
			"sssssssssssss",
			$_POST['nama'],
			$_POST['email'],
			$_POST['password'],
			$_POST['tempatlahir'],
			$_POST['tanggallahir'],
			$_POST['jk'],
			$_POST['nohportu'],
			$_POST['alamat'],
			$_POST['agama'],
			$_POST['sekolahasal'],
			$_POST['namaortu'],
			$name,
			$_POST['iddaftar']
		);

	if ($stmt->execute()) {
		echo "<script>alert('Data Siswa berhasil diubah')</script>";
		echo "<script>window.location='index.php?hal=pendaftaran/data';</script>";
	} else {
		echo "<script>alert('Data Siswa Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}
} else if (isset($_GET['hapus'])) {

	//Proses hapus
	$stmt = $mysqli->prepare("DELETE FROM tb_siswa where iddaftar=?");
	$stmt->bind_param("s", $_GET['hapus']);
	if ($stmt->execute()) {
		echo "<script>alert('Data Siswa Berhasil Dihapus')</script>";
		echo "<script>window.location='index.php?hal=pendaftaran/data';</script>";
	} else {
		echo "<script>alert('Data Siswa Gagal Dihapus')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}
} 

?>
