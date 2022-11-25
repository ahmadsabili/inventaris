<?php
include '../../inc/koneksi.php';

$sql = "DELETE FROM karyawan WHERE id_karyawan = ".$_GET['id'];

if (mysqli_query($koneksi, $sql)) {
    echo "<script>alert('Data berhasil dihapus!');window.location='../../index.php?page=karyawan';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}
?>