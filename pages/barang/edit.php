<?php
    $currentModule = 'barang';
    $id = $_GET['id'];

    $sql = "SELECT * FROM barang INNER JOIN jenis_barang ON barang.jenis_barang_id = jenis_barang.id_jenis_barang INNER JOIN karyawan ON barang.karyawan_id = karyawan.id_karyawan WHERE id_barang = $id";
    $barang = mysqli_query($koneksi, $sql);
    $result = mysqli_fetch_assoc($barang);

    $jenis_barang = mysqli_query($koneksi, "SELECT * FROM jenis_barang");
    $karyawan = mysqli_query($koneksi, "SELECT * FROM karyawan");
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
              <form action="functions/barang/update.php" class="form-horizontal" method="POST">
                <input type="hidden" name="id_barang" value="<?= $result['id_barang'] ?>">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="Masukkan nama barang" required value="<?= $result['nama_barang'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kode_barang" class="col-sm-2 col-form-label">Kode Barang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="kode_barang" name="kode_barang" placeholder="Masukkan kode barang" required value="<?= $result['kode_barang'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="no_aset" class="col-sm-2 col-form-label">No Aset</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="no_aset" name="no_aset" placeholder="Masukkan no aset" required value="<?= $result['no_aset'] ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jenis_barang" class="col-sm-2 col-form-label">Jenis Barang</label>
                    <div class="col-sm-10">
                      <select class="form-control select2" name="jenis_barang_id" id="jenis_barang">
                      <option value="" disabled hidden>--Pilih jenis barang--</option>
                        <?php foreach($jenis_barang as $jb) : ?>
                          <option value="<?= $jb['id_jenis_barang'] ?>" <?= $jb['id_jenis_barang'] == $result['jenis_barang_id'] ? 'selected' : '' ?>><?= $jb['nama_jenis'] ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="karyawan_id" class="col-sm-2 col-form-label">Pengguna</label>
                    <div class="col-sm-10">
                      <select class="form-control select2" name="karyawan_id" id="karyawan_id" style="width: 100%;">
                        <option value="" disabled hidden>--Pilih pengguna--</option>
                        <?php foreach($karyawan as $k) : ?>
                        <option value="<?= $k['id_karyawan'] ?>" <?= $k['id_karyawan'] == $result['karyawan_id'] ? 'selected' : '' ?>><?= $k['badge'] ?> - <?= $k['nama_karyawan'] ?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="karyawan_id" class="col-sm-2 col-form-label">Kondisi</label>
                    <div class="col-sm-10 mt-1">
                      <div class="form-check-inline mr-4">
                        <input class="form-check-input" type="radio" id="Baik" name="kondisi" value="Baik" <?= $result['kondisi'] == 'Baik' ? 'checked' : '' ?>>
                        <label for="Baik" class="form-check-label">Baik</label>
                      </div>
                      <div class="form-check-inline mr-4">
                        <input class="form-check-input" type="radio" id="Rusak" name="kondisi" value="Rusak" <?= $result['kondisi'] == 'Rusak' ? 'checked' : '' ?>>
                        <label for="Rusak" class="form-check-label">Rusak</label>
                      </div>
                      <div class="form-check-inline mr-4">
                        <input class="form-check-input" type="radio" id="Diperbaiki" name="kondisi" value="Diperbaiki" <?= $result['kondisi'] == 'Diperbaiki' ? 'checked' : '' ?>>
                        <label for="Diperbaiki" class="form-check-label">Diperbaiki</label>
                      </div>
                      <div class="form-check-inline mr-4">
                        <input class="form-check-input" type="radio" id="Dibatalkan" name="kondisi" value="Dibatalkan" <?= $result['kondisi'] == 'Dibatalkan' ? 'checked' : '' ?>>
                        <label for="Dibatalkan" class="form-check-label">Dibatalkan</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <a href="" class="btn btn-sm btn-default float-right ml-2">
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