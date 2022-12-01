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
      if (isset($_GET['page']))
      {
        $page = $_GET['page'];
        
        // cek url page
        if ($page == 'dashboard') {
          include 'pages/dashboard.php';
        } 
        if ($page == 'barang') {
          include 'pages/barang/index.php';
        }
        if ($page == 'jenis-barang') {
          include 'pages/jenis-barang/index.php';
        }
        if ($page == 'karyawan') {
          include 'pages/karyawan/index.php';
        }

        // role admin
        if ($_SESSION['role'] == 'admin')
        {
          if ($page == 'tambah-barang') {
            include 'pages/barang/create.php';
          }
          if ($page == 'edit-barang') {
            include 'pages/barang/edit.php';
          }
          if ($page == 'hapus-barang') {
              header('location: functions/barang/delete.php?id='.$_GET['id']);
          } 
          if ($page == 'baik-barang') {
              header('location: functions/barang/good.php?id='.$_GET['id']);
          } 
          if ($page == 'rusak-barang') {
              header('location: functions/barang/broken.php?id='.$_GET['id']);
          } 
          if ($page == 'tambah-jenis-barang') {
              include 'pages/jenis-barang/create.php';
          } 
          if ($page == 'edit-jenis-barang') {
              include 'pages/jenis-barang/edit.php';
          } 
          if ($page == 'hapus-jenis-barang') {
              header('location: functions/jenis-barang/delete.php?id='.$_GET['id']);
          } 
          if ($page == 'tambah-karyawan') {
              include 'pages/karyawan/create.php';
          } 
          if ($page == 'edit-karyawan') {
              include 'pages/karyawan/edit.php';
          } 
          if ($page == 'hapus-karyawan') {
              header('location: functions/karyawan/delete.php?id='.$_GET['id']);
          } 
          if ($page == 'users') {
              include 'pages/users/index.php';
          } 
          if ($page == 'tambah-user') {
              include 'pages/users/create.php';
          } 
          if ($page == 'edit-user') {
              include 'pages/users/edit.php';
          } 
          if ($page == 'hapus-user') {
              header('location: functions/users/delete.php?id='.$_GET['id']);
          }
        }

        // role teknisi
        if ($_SESSION['role'] == 'teknisi')
        {
          if ($page == 'terima-barang') {
              header('location: functions/barang/accept.php?id='.$_GET['id']);
          }
          if ($page == 'selesai-barang') {
              header('location: functions/barang/done.php?id='.$_GET['id']);
          }
          if ($page == 'tolak-barang') {
            header('location: functions/barang/refuse.php?id='.$_GET['id']);
          }
        }
      }
      else
      {
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
      <strong>&copy; 2022 <a href="#">Inventaris</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
      </div>
    </footer>
  </div>
<!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->
  <?php include 'inc/script.php'; ?>
</body>
</html>
