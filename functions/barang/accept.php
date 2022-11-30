<?php
include '../../inc/koneksi.php';

$sql = "UPDATE barang SET kondisi='Diterima' WHERE id_barang = ".$_GET['id'];

if (mysqli_query($koneksi, $sql)) {
    echo "<script>alert('Berhasil menerima!');window.location='../../index.php?page=barang';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}
?>