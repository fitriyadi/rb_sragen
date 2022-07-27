<?php
date_default_timezone_set('Asia/Jakarta');

function isselect($x,$y){
	if($x==$y){
		echo "selected";
	}else{
		echo "";
	}
}

function umur($tanggal){
	$tanggal = new DateTime($tanggal);
	$today = new DateTime('today');
	$y = $today->diff($tanggal)->y;

	return $y;

}

function tgl_indo($tgl){
	$tgl		= date_create($tgl);
	$tanggal	= date_format($tgl,"d-m-Y");
	return $tanggal;
}

function tgl_jam_indo($tgl){
	$tgl		= date_create($tgl);
	$tanggal	= date_format($tgl,"d-m-Y h:i:s");
	return $tanggal;
}

function getAddress() {
    $protocol = $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
    return $protocol.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
}


function label_jenis_bayar($kode)
{
    switch ($kode) {
        case 'Online':
            return "<span class='badge badge-success'>Online</span>";
            break;

        case 'Langsung':
            return "<span class='badge badge-primary'>Langsung</span>";
            break;

        default:
            return "";
            break;
    }
}

function label_status_bayar($kode)
{
    switch ($kode) {
        case 'Gagal':
            return "<span class='badge badge-danger'>Gagal</span>";
            break;

        case 'Lunas':
            return "<span class='badge badge-success'>Lunas</span>";
            break;

        case 'Proses':
            return "<span class='badge badge-primary'>Proses</span>";
            break;

        default:
            return "";
            break;
    }
}

function label_status_daftar($kode)
{
    switch ($kode) {
        case 'Langsung':
            return "<span class='badge badge-success'>Langung</span>";
            break;

        case 'Online':
            return "<span class='badge badge-primary'>Online</span>";
            break;

        default:
            return "";
            break;
    }
}

?>
