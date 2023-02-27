<?php 
include 'koneksi.php';

if(isset($_POST['simpan']) && $_POST['simpan']!=""){

	$kode_gejala = $_POST['kode_gejala'];
	$pertanyaan = $_POST['pertanyaan'];

	$query = mysqli_query($db, "INSERT INTO gejala VALUES('' ,'$kode_gejala','$pertanyaan','')");
	header('location:gejala.php');
	
	}else{
		header('location:tambah_gejala.php');
	}
	
?>