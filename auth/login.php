<?php
include '../inc/koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {
        session_start();
        $_SESSION['id'] = $row['id'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['nama'] = $row['nama'];
        $_SESSION['role'] = $row['role'];
        header('Location: ../index.php');
    } else {
        header('Location: ../login.php?pesan=email-password-salah');
    }
} else {
    header('Location: ../login.php?pesan=email-password-salah');
}