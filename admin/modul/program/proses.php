<?php
if(isset($_POST['tambah'])){	
//Proses penambahan index
	$stmt = $mysqli->prepare("INSERT INTO tb_program 
		(nama,deskripsi,biayadaftar) 
		VALUES (?,?,?)");

	$stmt->bind_param("sss", 
		$_POST['nama'],
		$_POST['deskripsi'],
		$_POST['biayadaftar']);	
	
	if ($stmt->execute()) { 
		echo "<script>alert('Data program berhasil ddeskripsimpan')</script>";
		echo "<script>window.location='index.php?hal=program/data';</script>";	
	} else {
		echo "<script>alert('Data program Gagal Ddeskripsimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_POST['ubah'])){

//Proses ubah data
	$stmt = $mysqli->prepare("UPDATE tb_program  SET 
		nama=?,
		deskripsi=?,
		biayadaftar=?
		where idprogram=?");
	$stmt->bind_param("ssss",
		$_POST['nama'],
		$_POST['deskripsi'],
		$_POST['biayadaftar'],
		$_POST['idprogram']);	

	if ($stmt->execute()) { 
		echo "<script>alert('Data program berhasil diubah')</script>";
		echo "<script>window.location='index.php?hal=program/data';</script>";	
	} else {
		echo "<script>alert('Data program Gagal Ddeskripsimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_GET['hapus'])){

	//Proses hapus
	$stmt = $mysqli->prepare("DELETE FROM tb_program where idprogram=?");
	$stmt->bind_param("s",$_GET['hapus']); 

	if ($stmt->execute()) { 
		echo "<script>alert('Data program Berhasil Dihapus')</script>";
		echo "<script>window.location='index.php?hal=program/data';</script>";	
	} else {
		echo "<script>alert('Data program Gagal Dihapus')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}
?>