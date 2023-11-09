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
                                    <a class="nav-link active" href="koleksi.php">Koleksiku</a>
                                </li>
                                <li class="nav-item col">
                                    <a class="nav-link active" href="../auth/logout.php"><svg
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
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                        <table class="table table-head-fixed text-nowrap">
                            <thead>
                                <tr>
                                    <th class="col-1">No</th>
                                    <th class="col-3">Judul Buku</th>
                                    <th class="col-2">Tanggal Pinjam</th>
                                    <th class="col-2">Tanggal Kembali</th>
                                    <th class="col-2">Status</th>
                                    <th class="col-2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = "SELECT data_peminjaman.id, data_peminjaman.is_returned, data_peminjaman.tgl_pinjam, data_peminjaman.tgl_kembali, data_buku.judul 
                  FROM data_peminjaman 
                  INNER JOIN data_buku 
                  ON data_peminjaman.buku_id = data_buku.id";
                                // INNER JOIN data_user
                                // ON data_peminjaman.user_id = data_user.id";
                                $sql = mysqli_query($konek, $query);
                                $no = 1;
                                while ($pinjam = mysqli_fetch_array($sql)) {
                                ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $pinjam['judul']; ?></td>
                                    <td><?php echo $pinjam['tgl_pinjam']; ?></td>
                                    <td><?php if (is_null($pinjam['tgl_kembali'])) {
                                                echo "-";
                                            } else {
                                                echo $pinjam['tgl_kembali'];
                                            }; ?></td>
                                    <td><?php if ($pinjam['is_returned'] == 1) {
                                                echo 'Dikembalikan';
                                            } else {
                                                echo 'Belum dikembalikan';
                                            } ?></td>
                                    <td>
                                        <form method="post"
                                            action="../../app/Services/userDashboard.php?id=<?= $pinjam['id']; ?>">
                                            <!-- TODO: ganti ikon nnti -->
                                            <button type="submit" name="btnKembalikan" class="btn text-info"><i
                                                    class="fa-solid fa-box-archive"></i></button>
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
                </div>
            </div>
        </div>
        </div>
    </section>
    <?php include("../partials/user-footer.php"); ?>