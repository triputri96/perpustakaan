<?php
include('../partials/head.php');
// require('../../app/Services/user/user.php');
?>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <?php include('../partials/navbar.php'); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <?php include('../partials/aside.php'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <?php include('../partials/breadcrumbs.php'); ?>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- jquery validation -->
              <!-- TODO: kalau pengen ubah warnanya sesuai brand pakai kelas card-form, cek style.css -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Insert <small>User Baru</small></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="quickForm" action="../../app/Services/authService.php" method="post">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="username">Username</label>
                      <input type="username" name="username" class="form-control" id="username">
                    </div>
                    <div class="form-group">
                      <label>Level</label>
                      <div class="d-flex">
                        <div class="form-check mr-3 d-flex align-items-center">
                          <input class="form-check-input" type="radio" name="level" id="admin" value="admin">
                          <label class="form-check-label" for="admin">
                            Admin
                          </label>
                        </div>
                        <div class="form-check d-flex align-items-center">
                          <input class="form-check-input" type="radio" name="level" id="user" value="user">
                          <label class="form-check-label" for="user">
                            User
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" name="password" class="form-control" id="password">
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" name="btnDaftar" class="btn btn-info">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">

            </div>
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include('../partials/footer.php'); ?>
    <!-- Control Sidebar -->
    <!-- <aside class="control-sidebar control-sidebar-dark"> -->
    <!-- Control sidebar content goes here -->
    <!-- </aside> -->
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  <?php include('../partials/scripts.php') ?>