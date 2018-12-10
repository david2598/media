<?php
include '../koneksi/koneksi.php';
$id_admin = $_POST['id_admin'];
$nama_admin = $_POST['nama_admin'];
$data = mysqli_query($koneksi, "update admin set nama_admin='$nama_admin' WHERE id_admin='$id_admin'");
header("location:../pixels/tampildataadmin.php");
?>
