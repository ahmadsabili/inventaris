<?php
  include 'inc/koneksi.php';
  include 'auth/session.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inventaris</title>
  <?php include 'inc/style.php'; ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <?php include 'inc/navbar.php'; ?>
    <!-- /.navbar -->

    <!-- Content Wrapper. Contains page content -->
    <?php
      if (isset($_GET['page'])) {
        $page = $_GET['page'];
        if ($page == 'dashboard') {
          include 'pages/dashboard.php';
        } else if ($page == 'barang') {
          include 'pages/barang/index.php';
        } else if ($page == 'tambah-barang') {
          include 'pages/barang/create.php';
        } else if ($page == 'edit-barang') {
          include 'pages/barang/edit.php';
        } else if ($page == 'hapus-barang') {
          header('location: functions/barang/delete.php?id='.$_GET['id']);
        } else if ($page == 'jenis-barang') {
          include 'pages/jenis-barang/index.php';
        } else if ($page == 'tambah-jenis-barang') {
          include 'pages/jenis-barang/create.php';
        } else if ($page == 'edit-jenis-barang') {
          include 'pages/jenis-barang/edit.php';
        } else if ($page == 'hapus-jenis-barang') {
          header('location: functions/jenis-barang/delete.php?id='.$_GET['id']);
        } else if ($page == 'karyawan') {
          include 'pages/karyawan/index.php';
        } else {
          include 'pages/404.php';
        }
      } else {
        include 'pages/dashboard.php';
      }
    ?>
    <!-- /.content-wrapper -->

    <!-- Main Sidebar Container -->
    <?php include 'inc/sidebar.php'; ?>
    
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
    </footer>
  </div>
<!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <?php include 'inc/script.php'; ?>
</body>
</html>
