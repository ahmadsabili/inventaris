<?php
include '../../inc/koneksi.php';

// Get the form data
$id = $_POST['id_user'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$role = $_POST['role'];

// Insert into database
$sql = "UPDATE users SET nama = '$nama', email = '$email', role = '$role' WHERE id_user = $id";

if (mysqli_query($koneksi, $sql)) {
    echo "<script>alert('Data berhasil diupdate!');window.location='../../index.php?page=users';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}