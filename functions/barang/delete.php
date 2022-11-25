<?php
include '../../inc/koneksi.php';

$sql = "DELETE FROM barang WHERE id_barang = ".$_GET['id'];

if (mysqli_query($koneksi, $sql)) {
    echo "<script>alert('Data berhasil dihapus!');window.location='../../index.php?page=barang';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}
?>