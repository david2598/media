<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
</head>
<body>

<?php
include "../koneksi/koneksi.php";
$id_admin = $_GET['id_admin'];
$data = mysqli_query($koneksi, "select * from admin inner join user ON admin.id_user=user.id_user WHERE id_admin='$id_admin'");
while ($d = mysqli_fetch_array($data)) {
	?>
	<form method="POST" action="update.php">
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id_admin" value="<?php echo $d['id_admin']; ?>">
					<input type="text" name="nama_admin" value="<?php echo $d['nama_admin']; ?>">
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>
					<input type="text" name="alamat" value="<?php echo $d['alamat']; ?>">
				</td>
			</tr>
			<tr>
				<td>No HP</td>
				<td>
					<input type="number" name="no_hp" value="<?php echo $d['no_hp']; ?>">
				</td>
			</tr>
			<tr>
				<td>Username</td>
				<td>
					<input type="text" name="username" value="<?php echo $d['username']; ?>">
				</td>
			</tr>
			<tr>
				<td>Status</td>
				<td>
					<select name="Status">
						<option value="Aktif">Aktif</option>
						<option value="Non Aktif">Non Aktif</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="simpan" value="simpan"></td>
			</tr>
		</table>
		
	</form>
	<?php
}

?>
</body>
</html>