<?php
include "../koneksi/koneksi.php";
//Mengambil Nilai Form
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi,"SELECT password FROM user WHERE username='$username'"); // Query Ke Database
if(mysqli_num_rows($query)==1){ //Data Ditemukan
	$data = mysqli_fetch_array($query);
	if(password_verify($password,$data['password'])){ //Jika Password Benar
		echo "Login Sukses";
	}else{ //Jika Password Salah
		echo "Login Gagal";
	}
}else{ //Data Tidak Ditemukan
	echo "Login Gagal";
}
?>