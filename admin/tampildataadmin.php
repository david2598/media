<?php
include "../koneksi/koneksi.php";
$admin = mysqli_query($koneksi,"SELECT * FROM user inner join admin where admin.id_user=user.id_user");
$ahligizi = mysqli_query($koneksi, "SELECT * FROM user inner join ahligizi where ahligizi.id_user=user.id_user");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Tampil Data</title>
</head>
<body>
	<h1>Data Admin</h1>
	<a href="signupadmin.php">Sign Up</a>
	<br><br>
<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No.</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>No HP</th>
		<th>Username</th>
		<th>Status</th>
		<th>Aksi</th>
	</tr>
	<?php
		$no = 1;
		while($row = mysqli_fetch_array($admin)){
	?>
	<tr>
		<td><?php echo  $no++; ?></td>
		<td><?= $row["nama_admin"]; ?></td>
		<td><?= $row["alamat"]; ?></td>
		<td><?= $row["no_hp"]; ?></td>
		<td><?= $row["username"]; ?></td>
		<td><?= $row["status"]; ?></td>
		<td>
			<a href="edit.php?id_admin=<?= $row['id_admin']; ?>">Edit</a>
			<br>
			<a href="hapus.php?id_user=<?= $row['id_user']; ?>">Hapus</a>
		</td>
	</tr>
	<?php } ?>
	
</table>
<br>
<br>
<h1>Data Ahligizi</h1>
	<a href="../ahligizi/signupahligizi.php">Sign Up</a>
	<br><br>
<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No.</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>No HP</th>
		<th>Pendidikan Terakhir</th>
		<th>Deskripsi</th>
		<th>Username</th>
		<th>Status Verifikasi</th>
		<th>Status</th>
		<th>Aksi</th>
	</tr>
	<?php
		$no = 1;
		while($row = mysqli_fetch_array($ahligizi)){
	?>
	<tr>
		<td><?php echo  $no++; ?></td>
		<td><?= $row["nama_ahligizi"]; ?></td>
		<td><?= $row["alamat"]; ?></td>
		<td><?= $row["no_hp"]; ?></td>
		<td><?= $row["pendidikan_terakhir"]; ?></td>
		<td><?= $row["deskripsi"]; ?></td>
		<td><?= $row["username"]; ?></td>
		<td><?= $row["status_verifikasi"]; ?></td>
		<td><?= $row["status"]; ?></td>
		<td>
			<a href="editahligizi.php?id_admin=<?= $row['id_ahligizi']; ?>">Edit</a>
			<br>
			<a href="hapusahligizi.php?id_user=<?= $row['id_user']; ?>">Hapus</a>
		</td>
	</tr>
	<?php } ?>
	
</table>
</body>
</html>