<?php
    $currentModule = 'barang';
    $sql = "SELECT * FROM barang INNER JOIN jenis_barang ON barang.jenis_barang_id = jenis_barang.id_jenis_barang INNER JOIN karyawan ON barang.karyawan_id = karyawan.id_karyawan";

    $jenis_barang = mysqli_query($koneksi, "SELECT * FROM jenis_barang");
    $karyawan = mysqli_query($koneksi, "SELECT * FROM karyawan");

    $result = mysqli_query($koneksi, $sql);
?>

<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Tambah Barang</h1>
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
              <!-- /.card-header -->
              <!-- form start -->
              <form action="functions/barang/store.php" class="form-horizontal" method="POST">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Masukkan nama barang" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="unit_kerja" class="col-sm-2 col-form-label">Unit Kerja</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="unit_kerja" name="unit_kerja" placeholder="Masukkan unit kerja" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="no_aset" class="col-sm-2 col-form-label">No Aset</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="no_aset" name="no_aset" placeholder="Masukkan no aset" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jenis_barang" class="col-sm-2 col-form-label">Jenis Barang</label>
                    <div class="col-sm-10">
                      <select class="form-control select2" name="jenis_barang_id" id="jenis_barang">
                        <option value="" disabled hidden selected>--Pilih jenis barang--</option>
                        <?php foreach($jenis_barang as $jb) : ?>
                          <option value="<?= $jb['id_jenis_barang'] ?>"><?= $jb['nama_jenis'] ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="karyawan_id" class="col-sm-2 col-form-label">Pengguna</label>
                    <div class="col-sm-10">
                      <select class="form-control select2" name="karyawan_id" id="karyawan_id" style="width: 100%;">
                        <option value="" disabled hidden selected="selected">--Pilih pengguna--</option>
                        <?php foreach($karyawan as $k) : ?>
                          <option value="<?= $k['id_karyawan'] ?>"><?= $k['badge'] ?> - <?= $k['nama_karyawan'] ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="karyawan_id" class="col-sm-2 col-form-label">Kondisi</label>
                    <div class="col-sm-10 mt-1">
                      <div class="form-check-inline mr-4">
                        <input class="form-check-input" type="radio" id="Baik" name="kondisi" value="Baik" checked>
                        <label for="Baik" class="form-check-label">Baik</label>
                      </div>
                      <div class="form-check-inline mr-4">
                        <input class="form-check-input" type="radio" id="Rusak" name="kondisi" value="Rusak">
                        <label for="Rusak" class="form-check-label">Rusak</label>
                      </div>
                      <div class="form-check-inline mr-4">
                        <input class="form-check-input" type="radio" id="Diperbaiki" name="kondisi" value="Diperbaiki">
                        <label for="Diperbaiki" class="form-check-label">Diperbaiki</label>
                      </div>
                      <div class="form-check-inline mr-4">
                        <input class="form-check-input" type="radio" id="Selesai" name="kondisi" value="Selesai">
                        <label for="Selesai" class="form-check-label">Selesai</label>
                      </div>
                      <div class="form-check-inline mr-4">
                        <input class="form-check-input" type="radio" id="Ditolak" name="kondisi" value="Ditolak">
                        <label for="Ditolak" class="form-check-label">Ditolak</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <a href="index.php?page=barang" class="btn btn-sm btn-default float-right ml-2">
                        Kembali
                    </a>
                    <button type="submit" class="btn btn-sm btn-primary float-right" name="store">
                      <i class="fas fa-save"></i> &nbsp;
                      Simpan
                    </button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
      <!-- /.content -->
</div>