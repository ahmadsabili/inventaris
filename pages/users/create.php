<?php
    $currentModule = 'users';
?>

<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Tambah User</h1>
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
              <form action="functions/users/store.php" class="form-horizontal" method="POST">
                <div class="card-body">
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
                        </div>
                    </div>
                    <div class="form-group row">
                    <label for="role" class="col-sm-2 col-form-label">Role</label>
                    <div class="col-sm-10 mt-1">
                      <div class="form-check-inline mr-4">
                        <input class="form-check-input" type="radio" id="admin" name="role" value="admin" checked>
                        <label for="admin" class="form-check-label">Admin</label>
                      </div>
                      <div class="form-check-inline mr-4">
                        <input class="form-check-input" type="radio" id="teknisi" name="role" value="teknisi">
                        <label for="teknisi" class="form-check-label">Teknisi</label>
                      </div>
                      <div class="form-check-inline mr-4">
                        <input class="form-check-input" type="radio" id="user" name="role" value="user">
                        <label for="user" class="form-check-label">User</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <a href="index.php?page=users" class="btn btn-sm btn-default float-right ml-2">
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