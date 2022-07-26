<?php
if(isset($_POST['tambah'])){	
//Proses penambahan index
	$stmt = $mysqli->prepare("INSERT INTO tb_profil 
		(judul,isi) 
		VALUES (?,?)");

	$stmt->bind_param("ss", 
		$_POST['judul'],
		$_POST['isi']);	
	
	if ($stmt->execute()) { 
		echo "<script>alert('Data profil berhasil disimpan')</script>";
		echo "<script>window.location='index.php?hal=profil/data';</script>";	
	} else {
		echo "<script>alert('Data profil Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_POST['ubah'])){

//Proses ubah data
	$stmt = $mysqli->prepare("UPDATE tb_profil  SET 
		judul=?,
		isi=?
		where idprofil=?");
	$stmt->bind_param("sss",
		$_POST['judul'],
		$_POST['isi'],
		$_POST['idprofil']);	

	if ($stmt->execute()) { 
		echo "<script>alert('Data profil berhasil diubah')</script>";
		echo "<script>window.location='index.php?hal=profil/data';</script>";	
	} else {
		echo "<script>alert('Data profil Gagal Disimpan')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}else if(isset($_GET['hapus'])){

	//Proses hapus
	$stmt = $mysqli->prepare("DELETE FROM tb_profil where idprofil=?");
	$stmt->bind_param("s",$_GET['hapus']); 

	if ($stmt->execute()) { 
		echo "<script>alert('Data profil Berhasil Dihapus')</script>";
		echo "<script>window.location='index.php?hal=profil/data';</script>";	
	} else {
		echo "<script>alert('Data profil Gagal Dihapus')</script>";
		echo "<script>window.location='javascript:history.go(-1)';</script>";
	}

}
?>