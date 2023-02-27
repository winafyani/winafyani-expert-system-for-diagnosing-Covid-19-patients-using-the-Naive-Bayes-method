<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($db, "DELETE FROM gejala WHERE id = '$id'");

	echo "string";


header('location:tabel_gejala.php');
?>