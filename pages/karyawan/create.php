<?php
    $currentModule = 'karyawan';
?>

<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Tambah Karyawan</h1>
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
              <form action="functions/karyawan/store.php" class="form-horizontal" method="POST">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="badge" class="col-sm-2 col-form-label">Badge</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="badge" name="badge" placeholder="Masukkan badge karyawan" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_karyawan" class="col-sm-2 col-form-label">Nama Karyawan</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan" placeholder="Masukkan nama karyawan" required>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <a href="index.php?page=karyawan" class="btn btn-sm btn-default float-right ml-2">
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