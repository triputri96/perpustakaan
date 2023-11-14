<?php
include('../partials/head.php');
require('../../app/Services/authService.php');
?>
<style>
    .btn-color {
        background-color: #97f9e3;
        transition: 0.3s ease;
    }

    .btn-color:hover {
        background-color: #89ecd6;
    }
</style>

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
                                <?php
                                if (isset($_GET['pesan'])) {

                                ?>
                                    <div id="myAlert" class="alert alert-warning alert-dismissible fade show" role="alert">
                                        <strong>Insert Data Gagal!</strong>
                                        <?php echo $_GET['pesan']; ?>
                                        <button type="button" class="btn-close" aria-label="Close" onclick="closeAlert()"></button>
                                    </div>
                                <?php
                                }
                                ?>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form id="quickForm" action="../../app/Services/authService.php" method="post">
                                    <div class="card-body card-header">
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="username" name="username" class="form-control" id="username" value="<?php if (array_key_exists('user', $_SESSION)) {
                                                                                                                                    echo  $_SESSION['user'];
                                                                                                                                } else {
                                                                                                                                    echo '';
                                                                                                                                } ?>">
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
                                                    <input class="form-check-input" type="radio" name="level" id="user" value="user" checked>
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
                                        <button type="submit" name="btnDaftar" class="btn btn-color">Submit</button>
                                        <a href="../admin/user.php" class="btn btn-color">Keluar</a>

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
    <script>
        function closeAlert() {
            var myAlert = document.getElementById('myAlert');
            myAlert.style.display = 'none';
        }
    </script>