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
        <div class="card">
          <div class="card-header">
            <div class="card-header">
              <h3 class="card-title">Data Pengembalian</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body table-responsive p-0" style="height: 300px;">
            <table class="table table-head-fixed text-nowrap">
              <thead>
                <tr>
                  <th class="col-1">No</th>
                  <th class="col-2">Judul Buku</th>
                  <th class="col-3">Peminjam</th>
                  <th class="col-4">Tanggal Kembali</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $query = "SELECT data_peminjaman.id, data_user.username, data_peminjaman.tgl_kembali, data_buku.judul 
                  FROM data_peminjaman 
                  INNER JOIN data_buku 
                  ON data_peminjaman.buku_id = data_buku.id 
                  INNER JOIN data_user
                  ON data_peminjaman.user_id = data_user.id
                  WHERE data_peminjaman.is_returned = '1'";
                $sql = mysqli_query($konek, $query);
                $no = 1;
                while ($pinjam = mysqli_fetch_array($sql)) {
                ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $pinjam['judul']; ?></td>
                    <td><?php echo $pinjam['username']; ?></td>
                    <td><?php echo $pinjam['tgl_kembali']; ?></td>
                  <tr>
                  <?php
                  $no++;
                }
                  ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
          <!-- <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-right">
              <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
          </div> -->
          <!-- /.card-footer-->
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