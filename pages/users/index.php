<?php
  $currentModule = 'users';

  $sql = "SELECT * FROM users";
  $result = mysqli_query($koneksi, $sql);
  $no = 1;
?>

<div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Daftar Users</h1>
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
                  <a href="index.php?page=tambah-user" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i>&nbsp; Tambah User</a>
              </div>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Aksi</th>
                  </thead>
                  <tbody>
                    <?php foreach($result as $user): ?>
                      <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $user['nama'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><?= $user['role'] ?></td>
                        <td>
                          <a href="index.php?page=edit-user&id=<?= $user['id_user'] ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                          <a href="index.php?page=hapus-user&id=<?= $user['id_user'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus data?')"><i class="fas fa-trash"></i></a>
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