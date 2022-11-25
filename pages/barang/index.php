<?php
  $currentModule = 'barang';

  $sql = "SELECT * FROM barang INNER JOIN jenis_barang ON barang.jenis_barang_id = jenis_barang.id_jenis_barang INNER JOIN karyawan ON barang.karyawan_id = karyawan.id_karyawan";
  $result = mysqli_query($koneksi, $sql);
  $no = 1;
?>

<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Daftar Barang</h1>
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
              <div class="card-header">
              <div class="float-right">
                  <a href="index.php?page=tambah-barang" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i>&nbsp; Tambah Barang</a>
              </div>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>No Aset</th>
                    <th>Nama Barang</th>
                    <th>Jenis</th>
                    <th>Pengguna</th>
                    <th>Kondisi</th>
                    <th>Aksi</th>
                  </thead>
                  <tbody>
                    <?php foreach($result as $barang): ?>
                      <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $barang['kode_barang'] ?></td>
                        <td><?= $barang['no_aset'] ?></td>
                        <td><?= $barang['nama_barang'] ?></td>
                        <td><?= $barang['nama_jenis'] ?></td>
                        <td><?= $barang['badge'] . ' - '. $barang['nama_karyawan'] ?></td>
                        <td><?= $barang['kondisi'] ?></td>
                        <td>
                          <a href="index.php?page=edit-barang&id=<?= $barang['id_barang'] ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                          <a href="index.php?page=hapus-barang&id=<?= $barang['id_barang'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus data?')"><i class="fas fa-trash"></i></a>
                        </td>
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