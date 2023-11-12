<?php
include('../partials/head.php');
require('../../app/Services/user.php');
?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php include('../partials/navbar.php'); ?>
        <?php include('../partials/aside.php'); ?>
        <div class="content-wrapper">
            <?php include('../partials/breadcrumbs.php'); ?>
            <section class="content">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data User</h3>
                        <div class="card-tools">
                            <a class="btn btn-info" href="tambahUser.php"><i class="fas fa-plus"></i> Insert</a>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0" style="height: 400px;">
                        <!-- Seach filter -->
                        <div class="d-flex justify-content-end search-container">
                            <form action="#search_results" method="get">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit" name="table-btn-search" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th class="col-1">No</th>
                                    <th class="col-3">Username</th>
                                    <th class="col-3">Level</th>
                                    <th class="col-3">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                $username = $_SESSION['username'];
                if (isset($_GET['table_search'])) {
                  $cari = $_GET['table_search'];
                  $query = "SELECT * FROM data_user WHERE NOT username='$username' AND username LIKE '%$cari%' OR level LIKE '%$cari%'";
                } else {
                  $query = "SELECT * FROM data_user WHERE NOT username='$username'";
                }
                $sql = mysqli_query($konek, $query);
                $no = 1;
                while ($user = mysqli_fetch_array($sql)) {
                ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $user['username']; ?></td>
                                    <td><?php echo $user['level']; ?></td>
                                    <td>
                                        <form method="post" action="../../app/Services/user.php?id=<?= $user['id']; ?>">
                                            <!-- <button type="submit" name="edit" class="btn text-info"><i class="fas fa-edit"></i></button> -->
                                            <button type="submit" name="delete" class="btn text-danger"><i
                                                    class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
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
            </section>
        </div>
        <?php include('../partials/footer.php'); ?>
    </div>
    <?php include('../partials/scripts.php') ?>