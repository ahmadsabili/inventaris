<?php
include '../../inc/koneksi.php';

$sql = "DELETE FROM users WHERE id_user = ".$_GET['id'];

if (mysqli_query($koneksi, $sql)) {
    echo "<script>alert('Data berhasil dihapus!');window.location='../../index.php?page=users';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}
?>