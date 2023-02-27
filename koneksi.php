<?php 
$db = mysqli_connect("localhost","root","","tugas_akhir");

if(mysqli_connect_errno()){
	echo "Koneksi database gagal : ". mysqli_connect_error();

}


 function registrasi($data){

 	global $db;

 	$email = $data["email"];
 	$usernama = $data["usernama"];
 	$username = strtolower(stripslashes($data["username"]));
 	$password = $data["password"];
 	$password2 = $data["password2"];

 	$result = mysqli_query($db, "SELECT admin_username FROM tbl_admin WHERE admin_username = '$username'");

 	if(mysqli_fetch_assoc($result)){

 		echo "<script>
 				alert('Username Telah Digunakan!');
 				</script>";

 		return false;
 	}

 	if ($password !== $password2) {
 		
 		echo "<script>
 				alert('Konfirmasi Password Tidak Sesuai!');
 				</script>";

 				return false;
 	}

 	mysqli_query($db, "INSERT INTO tbl_admin VALUES('', '$username','$usernama', '$password','$email')");

 	return mysqli_affected_rows($db);
	
	}

function query($query){

	global $db;
	$result = mysqli_query($db, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows = $row;
	}
	return $rows;



}


function cari($keyword){

	$query = "SELECT * FROM tbl_admin WHERE admin_nama LIKE '$keyword'";
	return query($query);
}

?>

