<?php
include '../../inc/koneksi.php';

// Get the form data
$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$unit_kerja = $_POST['unit_kerja'];
$no_aset = $_POST['no_aset'];
$jenis_barang_id = $_POST['jenis_barang_id'];
$karyawan_id = $_POST['karyawan_id'];
$kondisi = $_POST['kondisi'];

// Insert into database
$sql = "UPDATE barang SET nama_barang = '$nama_barang', unit_kerja = '$unit_kerja', no_aset = '$no_aset', jenis_barang_id = '$jenis_barang_id', karyawan_id = '$karyawan_id', kondisi = '$kondisi' WHERE id_barang = '$id_barang'";

if (mysqli_query($koneksi, $sql)) {
    echo "<script>alert('Data berhasil diupdate!');window.location='../../index.php?page=barang';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}