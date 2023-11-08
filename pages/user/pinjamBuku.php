<?php include("../partials/user-head.php"); ?>

<body>
    <header>
        <nav id="navbar" class="navbar navbar-expand-lg fixed-top bg-nav">
            <div class="container-fluid navbar-container">
                <a class="navbar-brand" href="#">Logo</a>
                <button class="navbar-toggler justify-content-center" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mobile-navbar">
                        <div class="">
                            <ul class="navbar-nav navbar-nav me-auto mb-2 mb-lg-0 row">
                                <li class="nav-item col">
                                    <a class="nav-link active" aria-current="page"
                                        href="../user/index.php#home">Home</a>
                                </li>
                                <li class="nav-item col">
                                    <a class="nav-link color-black" href="koleksi.php">Koleksiku</a>
                                </li>
                                <li class="nav-item col">
                                    <a class="nav-link color-black" href="../auth/logout.php"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                                            <path fill-rule="evenodd"
                                                d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                                        </svg></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <?php require('../../app/Services/userDashboard.php') ?>
    <section id="pinjamBuku">
        <div style=" height: 100vh;padding: 100px 100px;">
            <div class="card">
                <div class="card-body">
                    <?php
                    include '../../config/koneksi.php';
                    $id_buku = $_GET['idBuku'];
                    $query = mysqli_query($konek, "SELECT * FROM data_buku WHERE id='$id_buku'");
                    $dataBuku = mysqli_fetch_array($query);
                    ?>
                    <form id="quickForm" action="<?php if (isset($_GET['idBuku'])) {
                                                        echo "../../app/Services/userDashboard.php?idBuku=" . $_GET['idBuku'];
                                                    } ?>" method="post">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="d-flex justify-content-center">
                                        <img src="../../dist/uploads/<?php echo $dataBuku['cover']; ?>" alt="cover"
                                            width="300">
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" name="pinjamBuku" class="mt-2 btn btn-info">Pinjam
                                            Buku</button>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div>
                                        <div class="mb-3">
                                            <h1><?php echo $dataBuku['judul']; ?></h1>
                                        </div>
                                        <div class="mb-2">
                                            <h5>Deskripsi</h5>
                                            <p><?php echo $dataBuku['deskripsi']; ?></p>
                                        </div>
                                        <div>
                                            <h5>Pengarang</h5>
                                            <p><?php echo $dataBuku['pengarang']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
    <?php include("../partials/user-footer.php"); ?>