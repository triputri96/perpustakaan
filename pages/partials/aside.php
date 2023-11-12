<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="../../dist/img/jiun.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <p class="d-block" style="color: #C2C7D0; text-transform:capitalize;">
          <?php
          echo $_SESSION['username'];
          ?>
        </p>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="../user/index.php" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Home
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="../admin/dashboard.php" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="../admin/user.php" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              User
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="../admin/buku.php" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Buku
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="../admin/peminjaman.php" class="nav-link">
          <i class="nav-icon fa-solid fa-book-open-reader"></i>
            <p>
              Peminjaman Buku
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="../admin/pengembalian.php" class="nav-link">
            <i class="nav-icon far fa-calendar-alt"></i>
            <p>
              Pengembalian Buku
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="../../pages/auth/logout.php" class="nav-link">
            <i class="nav-icon far fa-solid fa-arrow-right-from-bracket"></i>
            <p>
              Log Out
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>