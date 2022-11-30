<?php
include '../../inc/koneksi.php';

// Get the form data
$nama_karyawan = $_POST['nama_karyawan'];
$badge = $_POST['badge'];
$no_hp = $_POST['no_hp'];

// Insert into database
$sql = "INSERT INTO karyawan (nama_karyawan, badge, no_hp) VALUES ('$nama_karyawan', '$badge', '$no_hp')";

if (mysqli_query($koneksi, $sql)) {
    echo "<script>alert('Data berhasil ditambahkan!');window.location='../../index.php?page=karyawan';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}