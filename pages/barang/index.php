<?php
  $currentModule = 'barang';

  if ($_SESSION['role'] == 'teknisi') {
    $sql = "SELECT * FROM barang INNER JOIN jenis_barang ON barang.jenis_barang_id = jenis_barang.id_jenis_barang INNER JOIN karyawan ON barang.karyawan_id = karyawan.id_karyawan WHERE barang.kondisi = 'Rusak' OR barang.kondisi = 'Diterima' OR barang.kondisi = 'Ditolak'";
  } else {
    $sql = "SELECT * FROM barang INNER JOIN jenis_barang ON barang.jenis_barang_id = jenis_barang.id_jenis_barang INNER JOIN karyawan ON barang.karyawan_id = karyawan.id_karyawan";
  }

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
              <?php if ($_SESSION['role'] == 'admin') : ?>
              <div class="card-header">
              <div class="float-right">
                  <a href="index.php?page=tambah-barang" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i>&nbsp; Tambah Barang</a>
              </div>
              </div>
              <?php endif; ?>
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
                    <?php if ($_SESSION['role'] != 'user') : ?>
                    <th>Aksi</th>
                    <?php endif; ?>
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
                        <td>
                          <span class="text-sm badge <?php if ($barang['kondisi'] == 'Diterima') {
                            echo 'badge-success';
                          } else if ($barang['kondisi'] == 'Ditolak') {
                            echo 'badge-danger';
                          } else if ($barang['kondisi'] == 'Rusak') {
                            echo 'badge-warning';
                          } else {
                            echo 'badge-primary';
                          } ?>"><?= $barang['kondisi'] ?></span>
                        </td>
                        <?php if ($_SESSION['role'] != 'user') : ?>
                        <td>
                          <?php
                          if ($_SESSION['role'] == 'teknisi') :
                          ?>
                          <a href="index.php?page=terima-barang&id=<?= $barang['id_barang'] ?>" class="btn btn-sm btn-success" title="Terima Perbaikan" onclick="return confirm('Terima perbaikan?')"><i class="fas fa-wrench"></i></a>
                          <a href="index.php?page=tolak-barang&id=<?= $barang['id_barang'] ?>" class="btn btn-sm btn-danger" title="Tolak Perbaikan" onclick="return confirm('Tolak perbaikan?')"><i class="fas fa-times"></i></a>
                          <?php endif; ?>

                          <?php if ($_SESSION['role'] == 'admin') : ?>
                          <?php if ($barang['kondisi'] == 'Rusak' || $barang['kondisi'] == 'Diterima') : ?>
                          <a href="index.php?page=baik-barang&id=<?= $barang['id_barang'] ?>" class="btn btn-sm btn-primary" title="Baik" onclick="return confirm('Ubah menjadi Baik?')"><i class="fas fa-check-circle"></i></a>
                          <?php endif; ?>

                          <?php if ($barang['kondisi'] == 'Baik') : ?>
                          <a href="index.php?page=rusak-barang&id=<?= $barang['id_barang'] ?>" class="btn btn-sm btn-danger" title="Rusak"><i class="fas fa-times-circle" onclick="return confirm('Ubah menjadi Rusak?')"></i></a>
                          <?php endif; ?>

                          <a href="index.php?page=edit-barang&id=<?= $barang['id_barang'] ?>" class="btn btn-sm btn-warning" title="Edit"><i class="fas fa-edit"></i></a>

                          <a href="index.php?page=hapus-barang&id=<?= $barang['id_barang'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus data?')" title="Hapus"><i class="fas fa-trash"></i></a>
                          <?php endif; ?>
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