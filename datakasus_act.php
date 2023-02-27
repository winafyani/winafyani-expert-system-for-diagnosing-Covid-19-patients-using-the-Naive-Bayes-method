<?php 
include 'koneksi.php';

if(isset($_POST['simpan']) && $_POST['simpan']!=""){

	$BULAN = $_POST['BULAN'];

	if ($BULAN == "Januari") {
		
		header('location: januari.php');
	}
	else if ($BULAN == "Febuari") {
		
		header('location: febuari.php');
	}

	else if ($BULAN == "Maret") {
		
		header('location: maret.php');
	}
	else if ($BULAN == "April") {

       header('location: april.php');
	}
	else if ($BULAN == "Mei") {

       header('location: mei.php');
	}
	else if ($BULAN == "Juni") {

       header('location: juni.php');
	}
	else if ($BULAN == "Juli") {

       header('location: juli.php');
	}
	else if ($BULAN == "Agustus") {

       header('location: agustus.php');
	}
	else{
		header('location: seluruhdata.php');
	}
	
	}else{
		header('location:tambah_gejala.php');
	}
	
?>