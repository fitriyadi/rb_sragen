<?php
session_start();
require_once 'setting/koneksi.php';
require_once 'setting/crud.php';

$user=$_POST['username'];
$pass=$_POST['password']; 

//Pengecekan ada data dalam login tidak
$sqladmin="Select idpengguna from tb_pengguna where username='$user' and password='$pass' and level='Admin'";
$sqlpemilik="Select idpengguna from tb_pengguna where username='$user' and password='$pass' and level='pemilik'";
$sqlsiswa="Select iddaftar from tb_siswa where email='$user' and password='$pass'";

if (_cekData($mysqli,$sqladmin)== true){
	//JIka data ditemukan
	$_SESSION['admin']=_dataCustom($mysqli,$sqladmin);
	echo "<script>alert('Anda login sebagai Admin')</script>";
	echo "<script>window.location='admin/index.php?hal=dashboard';</script>";


}else if(_cekData($mysqli,$sqlpemilik)== true){
	//JIka data ditemukan
	$_SESSION['pemilik']=_dataCustom($mysqli,$sqlpemilik);
	echo "<script>alert('Anda login sebagai pemilik')</script>";
	echo "<script>window.location='pemilik/index.php?hal=dashboard';</script>";

}else if(_cekData($mysqli,$sqlsiswa)== true){
	//JIka data ditemukan
	$_SESSION['siswa']=_dataCustom($mysqli,$sqlsiswa);
	echo "<script>alert('Anda login sebagai siswa')</script>";
	echo "<script>window.location='siswa/index.php?hal=dashboard';</script>";

}else{
		//Jika tidak ditemukan
	echo "<script>alert('Username atau password tidak terdaftar')</script>";
	echo "<script>window.location='index.php';</script>";
	
}

?>