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
        <div class="container-fluid">
          <div class="row">
            <!-- Default box -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">

                  <div class="media-body">
                    <h3>
                      <?php $query = "SELECT COUNT(*) AS total FROM data_user";
                      $sql = mysqli_query($konek, $query);
                      $total = mysqli_fetch_assoc($sql);
                      echo  $total['total'];
                      ?>
                    </h3>
                  </div>

                  <p>Jumlah User</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="../admin/user.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <div class="media-body">
                    <h3><?php $query = "SELECT COUNT(*) AS total FROM data_buku";
                        $sql = mysqli_query($konek, $query);
                        $total = mysqli_fetch_assoc($sql);
                        echo  $total['total'];
                        ?> </h3>
                  </div>
                  <p>Jumlah Buku</p>
                </div>
                <div class="icon">
                  <i class="ion fa-solid fa-book-open"></i>
                </div>
                <a href="../admin/buku.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <div class="media-body">
                    <h3><?php $query = "SELECT COUNT(*) AS total FROM data_peminjaman WHERE is_returned='0'";
                        $sql = mysqli_query($konek, $query);
                        $total = mysqli_fetch_assoc($sql);
                        echo  $total['total'];
                        ?> </h3>
                  </div>
                  <p>Jumlah Peminjam</p>
                </div>
                <div class="icon">
                  <i class="ion fa-solid fa-book-open-reader"></i>
                </div>
                <a href="../admin/peminjaman.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <div class="media-body">
                    <h3><?php $query = "SELECT COUNT(*) AS total FROM data_peminjaman WHERE is_returned='1'";
                        $sql = mysqli_query($konek, $query);
                        $total = mysqli_fetch_assoc($sql);
                        echo  $total['total'];
                        ?> </h3>
                  </div>
                  <p>Jumlah Pengembalian</p>
                </div>
                <div class="icon">
                  <i class="ion fa-solid fa-calendar-days"></i>
                </div>
                <a href="../admin/pengembalian.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
  <script src="https://kit.fontawesome.com/8e4a683975.js" crossorigin="anonymous"></script>
</body>

</html>