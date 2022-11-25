<?php
    $currentModule = 'jenis barang';
?>

<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Tambah Jenis Barang</h1>
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
              <form action="functions/jenis-barang/store.php" class="form-horizontal" method="POST">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nama_jenis" class="col-sm-2 col-form-label">Nama Jenis Barang</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nama_jenis" name="nama_jenis" placeholder="Masukkan nama jenis barang" required>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <a href="index.php?page=jenis-barang" class="btn btn-sm btn-default float-right ml-2">
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