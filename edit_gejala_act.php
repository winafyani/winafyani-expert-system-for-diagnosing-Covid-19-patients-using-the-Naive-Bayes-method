<?php
include 'koneksi.php';

if(isset($_POST['simpan']) && $_POST['simpan'] !="") {
	
	$id = $_POST['id'];
	$kode_gejala = $_POST['kode_gejala'];
	$pertanyaan = $_POST['pertanyaan'];
	
	$query = mysqli_query($db, "UPDATE gejala SET kode_gejala = '$kode_gejala', pertanyaan = '$pertanyaan' WHERE id = '$id'");
	header('location:tabel_gejala.php');

	}else{
		header('location:edit_gejala.php');
	}
?>