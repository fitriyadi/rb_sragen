<?php
  require_once '../setting/konstanta.php';
  require_once '../setting/koneksi.php';
  require_once '../setting/crud.php';
  require_once '../setting/helper.php';

if (isset($_POST['tambah'])) {

	$sql="select * from tb_siswa where email='".$_POST['email']."'";
	$pass=$_POST['password'];

	if(_cekData($mysqli,$sql)==true):
		echo "<script>alert('Email sudah digunakan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	
	elseif($_POST['password']==$_POST['konfirmasi-password']):
		$status="Online";
		$stmt = $mysqli->prepare("INSERT INTO tb_siswa 
			(nama,email,password,tempatlahir,tanggallahir,jk,nohportu,alamat,statusdaftar,agama,sekolahasal,namaortu) 
			VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");

		$stmt->bind_param(
			"ssssssssssss",
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
		);

		if ($stmt->execute()) {
			echo "<script>alert('Siswa berhasil didaftarkan silakan, login')</script>";
			echo "<script>window.location='index.php';</script>";
		} else {
			echo "<script>alert('Siswa Gagal Daftar')</script>";
			echo "<script>window.location='javascript:history.go(-1)';</script>";
		}
	else:
		echo "<script>alert('Password dan Konfirmasi Password tidak sesuai')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	endif;

}
?>

?>