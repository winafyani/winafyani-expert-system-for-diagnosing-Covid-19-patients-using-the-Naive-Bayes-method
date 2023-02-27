<?php 
include 'koneksi.php';
include "excel_reader2.php";
?>
 
<?php
// upload file xls
$target = basename($_FILES['filedata']['name']) ;
move_uploaded_file($_FILES['filedata']['tmp_name'], $target);
 
// beri permisi agar file xls dapat di baca
chmod($_FILES['filedata']['name'],0777);
 
// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['filedata']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);
 
// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){
 
	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$kategori_usia     	= $data->val($i, 1);
	$demam   			= $data->val($i, 2);
	$lemas				= $data->val($i, 3);
	$batuk_kering		= $data->val($i, 4);
	$flu				= $data->val($i, 5);
	$diare  			= $data->val($i, 6);
	$nyeri  			= $data->val($i, 7);
	$muntah  			= $data->val($i, 8);
	$batuk_berdahak  	= $data->val($i, 9);
	$pusing  			= $data->val($i, 10);
	$gangguan  			= $data->val($i, 11);
	$mual 				= $data->val($i, 12);
	$hilang_rasa  		= $data->val($i, 13);
	$kejang  			= $data->val($i, 14);
	$pingsan  			= $data->val($i, 15);
	$hilang_penciuman	= $data->val($i, 16);
	$kontak_erat  		= $data->val($i, 17);
	$luar_daerah  		= $data->val($i, 18);
	$swab_pcr       	= $data->val($i, 19);
	$status_pasien		= $data->val($i, 20);

 
	if($kategori_usia != "" && $demam != "" && $lemas != "" && $batuk_kering != "" && $flu != "" && $diare != "" && $nyeri != "" && $muntah != "" && $batuk_berdahak != "" && $pusing != "" && $gangguan != "" && $mual != "" && $hilang_rasa != "" && $kejang != "" && $pingsan != "" && $hilang_penciuman != "" && $kontak_erat != ""&& $luar_daerah != ""&& $swab_pcr != "" && $status_pasien != "" ){
		// input data ke database (table data)
		$query = mysqli_query($db, "INSERT INTO naive_bayes VALUES ('', '$kategori_usia','$demam', '$lemas', '$batuk_kering', '$flu', '$diare', '$nyeri','$muntah', '$batuk_berdahak', '$pusing', '$gangguan', '$mual', '$hilang_rasa', '$kejang', '$pingsan', '$hilang_penciuman', '$kontak_erat', '$luar_daerah', '$swab_pcr', '$status_pasien')");
		$berhasil++;
	}
}
 
// hapus kembali file .xls yang di upload tadi
unlink($_FILES['filedata']['name']);
 
// alihkan halaman ke index.php
header("location:metode.php?berhasil=$berhasil");
?>