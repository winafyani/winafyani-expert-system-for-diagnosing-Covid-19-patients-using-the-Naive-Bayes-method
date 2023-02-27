<?php 
include 'koneksi.php';

if(isset($_POST['simpan']) && $_POST['simpan']!=""){

	$DIAGNOSA = $_POST['DIAGNOSA'];

	if ($DIAGNOSA == "RINGAN") {
		
		header('location: diagnosa_ringan.php');
	}
	else if ($DIAGNOSA == "SEDANG") {
		
		header('location: diagnosa_sedang.php');
	}

	else if ($DIAGNOSA == "BERAT") {
		
		header('location: diagnosa_berat.php');
	}
	else if ($DIAGNOSA == "TANPA")                      {

       header('location: tanpa_gejala.php');
	}
	else{
		header('location: random.php');
	}
	
	}else{
		header('location:tambah_gejala.php');
	}
	
?>