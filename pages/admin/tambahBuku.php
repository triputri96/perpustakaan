<?php
include('../partials/head.php');
require('../../app/Services/buku.php');
?>
<!-- <link rel="stylesheet" href="../../dist/css/style.css"> -->

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
                  <!-- Baru -->
                  <h3 class="card-title">Insert <small>Buku</small></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form enctype="multipart/form-data" id="quickForm" action="<?php if (isset($_GET['id'])) {
                                                                              echo "../../app/Services/buku.php?id=" . $_GET['id'];
                                                                            } else {
                                                                              echo "../../app/Services/buku.php?";
                                                                            } ?>" method="post">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="judul">Judul</label>
                      <input type="judul" name="judul" class="form-control" id="judul">
                    </div>
                    <div class="form-group">
                      <label for="pengarang">Pengarang</label>
                      <input type="pengarang" name="pengarang" class="form-control" id="pengarang">
                    </div>
                    <div class="form-group">
                      <label for="genre">Genre</label>
                      <input type="genre" name="genre" class="form-control" id="genre">
                    </div>
                     <div class="form-group">
                      <label for="deskripsi">Deskripsi</label>
                      <input type="deskripsi" name="deskripsi" class="form-control" id="deskripsi">
                    </div>
                    <!-- <div class="form-group">
                      <label for="cover">Cover</label>
                      <input type="file" name="coverImg" class="form-control" id="cover">
                    </div> -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" name="tambahBuku" class="btn btn-info">Submit</button>
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