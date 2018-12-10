<?php
include '../koneksi/koneksi.php';
$id = $_GET['id_user'];
// echo $id;
$delete1 = mysqli_query($koneksi, "DELETE FROM admin WHERE id_user='$id'");
$delete2 = mysqli_query($koneksi, "DELETE FROM user WHERE id_user='$id'");

header("location:../admin/tampildataadmin.php");
?>