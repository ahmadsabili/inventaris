<aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Inventaris</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="index.php" class="nav-link <?php $currentModule == 'dashboard' ? print('active') : '' ?>">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-header">DATA BARANG</li>
            <li class="nav-item">
              <a href="index.php?page=barang" class="nav-link <?php $currentModule == 'barang' ? print('active') : '' ?>">
                <i class="nav-icon fas fa-desktop"></i>
                <p>
                  Barang
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index.php?page=jenis-barang" class="nav-link <?php $currentModule == 'jenis barang' ? print('active') : '' ?>">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Jenis Barang
                </p>
              </a>
            </li>
            <li class="nav-header">DATA KARYAWAN</li>
            <li class="nav-item">
              <a href="index.php?page=karyawan" class="nav-link <?php $currentModule == 'karyawan' ? print('active') : '' ?>">
                <i class="nav-icon fas fa-user-tie"></i>
                <p>
                  Karyawan
                </p>
              </a>
            </li>
            <li class="nav-header">SETTINGS</li>
            <li class="nav-item">
              <a href="index.php?page=users" class="nav-link <?php $currentModule == 'users' ? print('active') : '' ?>">
                <i class="nav-icon fas fa-user-cog"></i>
                <p>
                  Users
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
</aside>