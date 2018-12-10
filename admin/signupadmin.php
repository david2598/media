<?php
	include "../koneksi/koneksi.php";

if (isset($_POST['simpan'])) {
	$nama_admin = $_POST['nama_admin'];
	$alamat = $_POST['alamat'];
	$no_hp = $_POST['no_hp'];
	$status = 'Aktif';
	$username = $_POST['username'];
	$password = password_hash($_POST['password'],PASSWORD_DEFAULT);
	$level = $_POST['level'];
	mysqli_query($koneksi,"INSERT INTO user VALUES ('','$username','$password','$level','$status')");
	$id = mysqli_insert_id($koneksi);
	mysqli_query($koneksi,"INSERT INTO admin VALUES ('','$nama_admin','$alamat','$no_hp','$id')");
}
?>
<!DOCTYPE html>
<html>
<head>	
	<title>Sign Up</title>
</head>
<body>
	<h1>SIGN UP</h1>
		<!-- $password = password_hash($_POST['password'],PASSWORD_DEFAULT); -->

	<form action="" method="post">
		<ul>
			<li>
				<label for="nama_admin">Nama</label>
				<input type="text" name="nama_admin" id="nama_admin">
			</li>
			<li>
				<label for="alamat">alamat</label>
				<input type="text" name="alamat" id="alamat">
			</li>
			<li>
				<label for="no_hp">No HP</label>
				<input type="number" name="no_hp" id="no_hp">
			</li>
			<li>
				<label for="username">Username</label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="password">Password</label>
				<input type="text" name="password" id="password">
			</li>
			<li>
				<label for="level">Level</label>
				<select name="level">
					<option value="Admin">Admin</option>
					<option value="Ahli Gizi">Ahli Gizi</option>
					<option value="Konsumen">Konsumen</option>
				</select>
			</li>
			<tr>
				<td><input type="submit" name="simpan" value="simpan"></td>
			</tr>
		</ul>
	</form>
</body>
</html>