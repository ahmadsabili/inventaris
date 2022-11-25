<?php
include '../../inc/koneksi.php';

// Get the form data
$nama_barang = $_POST['nama_barang'];
$kode_barang = $_POST['kode_barang'];
$no_aset = $_POST['no_aset'];
$jenis_barang_id = $_POST['jenis_barang_id'];
$karyawan_id = $_POST['karyawan_id'];
$kondisi = $_POST['kondisi'];

// Insert into database
$sql = "INSERT INTO barang (nama_barang, kode_barang, no_aset, jenis_barang_id, karyawan_id, kondisi) VALUES ('$nama_barang', '$kode_barang', '$no_aset', '$jenis_barang_id', '$karyawan_id', '$kondisi')";

if (mysqli_query($koneksi, $sql)) {
    echo "<script>alert('Data berhasil ditambahkan!');window.location='../../index.php?page=barang';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}