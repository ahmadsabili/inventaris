<?php
include '../../inc/koneksi.php';

// Get the form data
$id = $_POST['id_karyawan'];
$badge = $_POST['badge'];
$nama_karyawan = $_POST['nama_karyawan'];
$no_hp = $_POST['no_hp'];

// Insert into database
$sql = "UPDATE karyawan SET nama_karyawan = '$nama_karyawan', badge = '$badge', no_hp = '$no_hp' WHERE id_karyawan = $id";

if (mysqli_query($koneksi, $sql)) {
    echo "<script>alert('Data berhasil diupdate!');window.location='../../index.php?page=karyawan';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}