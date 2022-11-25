<?php
include '../../inc/koneksi.php';

// Get the form data
$id = $_POST['id_jenis_barang'];
$nama_jenis = $_POST['nama_jenis'];

// Insert into database
$sql = "UPDATE jenis_barang SET nama_jenis = '$nama_jenis' WHERE id_jenis_barang = $id";

if (mysqli_query($koneksi, $sql)) {
    echo "<script>alert('Data berhasil diupdate!');window.location='../../index.php?page=jenis-barang';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}