<!DOCTYPE html>
<html lang="en">
<?php include('../partials/head.php'); ?>

<body class="hold-transition sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">
    <!-- navbar -->
    <?php include('../partials/navbar.php'); ?>
    <!-- aside -->
    <?php include('../partials/aside.php'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <?php include('../partials/breadcrumbs.php'); ?>

      <!-- Main content -->
      <section class="content">

        <!-- Default box -->
        <div class="row">
          <div class="col-sm-3">

            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                      <i class="icon-pencil primary font-large-2 float-left"></i>
                    </div>
                    <div class="media-body text-right">
                      <h3><?php $query = "SELECT COUNT(*) AS total FROM data_user";
                          $sql = mysqli_query($konek, $query);
                          $total = mysqli_fetch_assoc($sql);
                          echo  $total['total'];
                          ?></h3>
                      <span>Jumlah User</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                      <i class="icon-pencil primary font-large-2 float-left"></i>
                    </div>
                    <div class="media-body text-right">
                      <h3><?php $query = "SELECT COUNT(*) AS total FROM data_buku";
                          $sql = mysqli_query($konek, $query);
                          $total = mysqli_fetch_assoc($sql);
                          echo  $total['total'];
                          ?> </h3>
                      <span>Jumlah Buku</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                      <i class="icon-pencil primary font-large-2 float-left"></i>
                    </div>
                    <div class="media-body text-right">
                      <h3><?php $query = "SELECT COUNT(*) AS total FROM data_peminjaman WHERE is_returned='0'";
                          $sql = mysqli_query($konek, $query);
                          $total = mysqli_fetch_assoc($sql);
                          echo  $total['total'];
                          ?> </h3>
                      <span>Jumlah Peminjaman Buku</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
          <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                      <i class="icon-pencil primary font-large-2 float-left"></i>
                    </div>
                    <div class="media-body text-right">
                      <h3><?php $query = "SELECT COUNT(*) AS total FROM data_peminjaman WHERE is_returned='1'";
                          $sql = mysqli_query($konek, $query);
                          $total = mysqli_fetch_assoc($sql);
                          echo  $total['total'];
                          ?> </h3>
                      <span>Jumlah Pengembalian Buku</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card -->

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
</body>

</html>