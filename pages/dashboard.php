<?php
  $currentModule = 'dashboard';

  $baik = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM barang WHERE kondisi = 'Baik'"));
  $rusak = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM barang WHERE kondisi = 'Rusak'"));
  $diterima = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM barang WHERE kondisi = 'Diterima'"));
  $ditolak = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM barang WHERE kondisi = 'Ditolak'"));
?>

<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Info boxes -->
          <div class="row">
            <!-- /.col -->
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3 bg-info">
                <span class="info-box-icon"><i class="fas fa-check-circle"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Baik</span>
                  <span class="info-box-number"><?= $baik; ?></span>
                </div>
              </div>
              <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3 bg-warning">
                <span class="info-box-icon"><i class="fas fa-times-circle"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Rusak</span>
                  <span class="info-box-number"><?= $rusak; ?></span>
                </div>
              </div>
              <!-- /.info-box -->
            </div>
            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3 bg-success">
                <span class="info-box-icon"><i class="fas fa-wrench"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Diterima</span>
                  <span class="info-box-number"><?= $diterima; ?></span>
                </div>
              </div>
              <!-- /.info-box -->
            </div>
            <div class="col-12 col-sm-6 col-md-3">
              <div class="info-box mb-3 bg-danger">
                <span class="info-box-icon"><i class="fas fa-times"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Ditolak</span>
                  <span class="info-box-number"><?= $ditolak; ?></span>
                </div>
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!--/. container-fluid -->
      </section>
      <!-- /.content -->
</div>