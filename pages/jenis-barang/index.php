<?php
    $currentModule = 'jenis barang';

    $sql = "SELECT * FROM jenis_barang";
    $result = mysqli_query($koneksi, $sql);
    $no = 1;
?>

<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Daftar Jenis Barang</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <?php if ($_SESSION['role'] == 'admin') : ?>
              <div class="card-header">
              <div class="float-right">
                  <a href="index.php?page=tambah-jenis-barang" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i>&nbsp; Tambah Jenis Barang</a>
              </div>
              </div>
              <?php endif; ?>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <th>No</th>
                    <th>Nama Jenis Barang</th>
                    <?php if ($_SESSION['role'] == 'admin') : ?>
                    <th>Aksi</th>
                    <?php endif; ?>
                  </thead>
                  <tbody>
                    <?php foreach($result as $jenis):?>
                    <tr>
                      <td><?= $no++ ?></td>
                      <td><?= $jenis['nama_jenis']?></td>
                      <?php if ($_SESSION['role'] == 'admin') : ?>
                      <td>
                        <a href="index.php?page=edit-jenis-barang&id=<?= $jenis['id_jenis_barang']?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                        <a href="index.php?page=hapus-jenis-barang&id=<?= $jenis['id_jenis_barang']?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus data?')"><i class="fas fa-trash"></i></a>
                      </td>
                      <?php endif; ?>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
      <!-- /.content -->
</div>