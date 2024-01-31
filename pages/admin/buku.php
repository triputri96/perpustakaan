<?php
include('../partials/head.php');
require('../../app/Services/buku.php');
?>
<style>
    .hidden-content {
        display: none;
    }

    .read-more-btn {
        border: none;
        background-color: transparent;
        color: #808080;
        cursor: pointer;
    }

    .btn-color {
        background-color: #97f9e3;
        transition: 0.3s ease;
    }

    .btn-color:hover {
        background-color: #89ecd6;
    }
</style>

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
                        <h3 class="card-title">Data Buku</h3>
                        <div class="card-tools">
                            <a class="btn btn-color" href="tambahBuku.php"><i class="fas fa-plus"></i> Insert</a>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0" style="height: 400px;">
                        <!-- Seach filter -->
                        <div class="d-flex justify-content-end search-container">
                            <form action="#search_results" method="get">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
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
                                    <th class="col-2">Judul</th>
                                    <th class="col-2">Pengarang</th>
                                    <th class="col-1">Genre</th>
                                    <th class="col-2">Deskripsi</th>
                                    <th class="col-2">Cover</th>
                                    <th class="col-2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (isset($_GET['table_search'])) {
                                    $cari = $_GET['table_search'];
                                    $query = "SELECT * FROM data_buku WHERE judul LIKE '%$cari%' OR pengarang LIKE '%$cari%' OR genre LIKE '%$cari%' OR deskripsi LIKE '%$cari%'";
                                } else {
                                    $query = "SELECT * FROM data_buku";
                                }
                                $sql = mysqli_query($konek, $query);
                                $no = 1;
                                while ($book = mysqli_fetch_array($sql)) {
                                ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $book['judul']; ?></td>
                                        <td><?php echo $book['pengarang']; ?></td>
                                        <td><?php echo $book['genre']; ?></td>
                                        <td class="col-2">
                                            <div class="description-container">
                                                <span class="short-description"><?php echo substr($book['deskripsi'], 0, 10); ?>...</span>
                                                <span class="full-description hidden-content"><?php echo $book['deskripsi']; ?></span>
                                                <button class="read-more-btn">More</button>
                                            </div>
                                        </td>
                                        <td><img src="../../dist/uploads/<?php echo $book['cover']; ?>" alt="gambar" style="width: 100px;"></td>
                                        <td class="d-flex">
                                            <a type="submit" name="editBuku" class="btn text-info" href="tambahBuku.php?editId=<?= $book['id'] ?>"><i class="fas fa-edit"></i></a>
                                            <form method="post" action="../../app/Services/buku.php?id=<?= $book['id']; ?>">
                                                <!-- <button type="submit" name="editBuku" class="btn text-info"><i class="fas fa-edit"></i></button> -->
                                                <button onclick="return confirm('Yakin Menghapus Data Ini?')" type="submit" name="deleteBuku" class="btn text-danger"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php
                                    $no++;
                                } ?>
                            </tbody>
                        </table>
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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            $(".read-more-btn").click(function() {
                var container = $(this).parent();
                container.find(".short-description, .full-description").toggleClass("hidden-content");

                if (container.find(".short-description").hasClass("hidden-content")) {
                    $(this).text("Less");
                } else {
                    $(this).text("More");

                }
            });
        });
    </script>