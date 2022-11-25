<?php
include '../../inc/koneksi.php';

// Get the form data
$nama = $_POST['nama'];
$email = $_POST['email'];
$role = $_POST['role'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Insert into database
$sql = "INSERT INTO users (nama, email, role, password) VALUES ('$nama', '$email', '$role', '$password')";

if (mysqli_query($koneksi, $sql)) {
    echo "<script>alert('Data berhasil ditambahkan!');window.location='../../index.php?page=users';</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}