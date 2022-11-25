<?php
include '../../inc/koneksi.php';

// Get the form data
$nama_jenis = $_POST['nama_jenis'];

// Insert into database
$sql = "INSERT INTO jenis_barang (nama_jenis) VALUES ('$nama_jenis')";

if (mysqli_query($koneksi, $sql)) {
    echo "<script>alert('Data berhasil ditambahkan!');window.location='../../index.php?page=jenis-barang';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}