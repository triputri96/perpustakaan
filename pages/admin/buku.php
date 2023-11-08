<?php
include('../partials/head.php');
require('../../app/Services/buku.php');
?>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- navbar -->
        <?php include('../partials/navbar.php'); ?>
        <!-- Main Sidebar Container -->
        <?php include('../partials/aside.php'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <?php include('../partials/breadcrumbs.php'); ?>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <div class="card-header">
                            <h3 class="card-title">Data Buku</h3>
                            <div class="card-tools">
                                <a class="btn btn-info" href="tambahBuku.php"><i class="fas fa-plus"></i> Insert</a>
                                <!-- <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th class="col-1">No</th>
                                    <th class="col-2">Judul</th>
                                    <th class="col-2">Pengarang</th>
                                    <th class="col-2">Genre</th>
                                    <th class="col-3">Deskripsi</th>
                                    <th class="col-2">Cover</th>
                                    <th class="col-2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                $query = "SELECT *FROM data_buku";
                $sql = mysqli_query($konek, $query);
                $no = 1;
                while ($book = mysqli_fetch_array($sql)) {
                ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $book['judul']; ?></td>
                                    <td><?php echo $book['pengarang']; ?></td>
                                    <td><?php echo $book['genre']; ?></td>
                                    <td><?php echo $book['deskripsi']; ?></td>
                                    <td><img src="../../dist/uploads/<?php echo $book['cover']; ?>" alt="gambar"
                                            style="width: 100px;"></td>
                                    <td class="d-flex">
                                        <a type="submit" name="editBuku" class="btn text-info"
                                            href="tambahBuku.php?editId=<?= $book['id'] ?>"><i
                                                class="fas fa-edit"></i></a>
                                        <form method="post" action="../../app/Services/buku.php?id=<?= $book['id']; ?>">
                                            <!-- <button type="submit" name="editBuku" class="btn text-info"><i class="fas fa-edit"></i></button> -->
                                            <button type="submit" name="deleteBuku" class="btn text-danger"><i
                                                    class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                <?php
                  $no++;
                } ?>
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