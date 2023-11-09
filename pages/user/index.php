<?php
include("../partials/user-head.php");
require('../../app/Services/userDashboard.php');
?>

<body>
	<header>
		<nav id="navbar" class="navbar navbar-expand-lg fixed-top bg-nav">
			<div class="container-fluid navbar-container">
				<a class="navbar-brand" href="../user/index.php#home">Logo</a>
				<button class="navbar-toggler justify-content-center" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<div class="mobile-navbar">
						<div class="">
							<ul class="navbar-nav navbar-nav me-auto mb-2 mb-lg-0 row">
								<li class="nav-item col">
									<a class="nav-link active" aria-current="page" href="#home">Home</a>
								</li>
								<li class="nav-item col">
									<a class="nav-link color-black" href="koleksi.php">Koleksiku</a>
								</li>
								<li class="nav-item col">
									<a class="nav-link color-black" href="../auth/logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
											<path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
										</svg></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<form class="d-flex" method="GET" action="#search-results">
					<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="cari">
					<button class="btn btn-outline-success" type="submit">
						Search
					</button>
					<input type="hidden" name="search_results" value="true">
				</form>

            </div>
        </nav>
    </header>
    <section id="home">
        <div class="banner-img position-relative d-flex align-items-center">
            <div class="d-flex col-5">
                <div>
                    <h1>Know The Magical Power of Books</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Reiciendis delectus aut omnis nihil amet sint, asperiores autem
                        sapiente dolor deserunt voluptate nam nobis vitae? Modi ipsam fuga
                        recusandae repellendus corrupti.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="book">
        <div class="book-section">
            <div class="p-5">
                <div class="mb-4">
                    <h3>Daftar Buku</h3>
                </div>
                <div class="row">
                    <?php
                    $count = 0;
                    if (isset($_GET['search_results'])) {
                        $cari = $_GET['cari'];
                        $query = "SELECT * FROM data_buku WHERE judul LIKE '%$cari%'";
                    } else {
                        $query = "SELECT * FROM data_buku";
                    }
                    $sql = mysqli_query($konek, $query);
                    if (isset($_GET['search_results'])) {
                        // Tampilkan hasil pencarian
                        echo '<script>window.location.href = "#search-results";</script>';
                    } else {
                        // Tampilkan tampilan awal
                    }
                    $sql = mysqli_query($konek, $query);
                    while ($book = mysqli_fetch_array($sql)) :
                    ?>
                        <div id="imgContainer" class="col-2">
                            <div class="card position-relative w-100">
                                <div class="card-body">
                                    <a href="pinjamBuku.php?idBuku=<?= $book['id'] ?>" class="text-decoration-none text-dark">
                                        <div class="d-flex justify-content-center">
                                            <img src="../../dist/uploads/<?php echo $book['cover']; ?>" alt="cover" style="width: 100px;">
                                        </div>
                                        <div class="mt-2">
                                            <h6 class="font-size text-center">
                                                <strong><?php echo $book['judul']; ?></strong>
                                            </h6>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php
                        $count++;
                    endwhile;
                    ?>
                </div>
            </div>
        </div>
    </section>
    <?php include("../partials/user-footer.php"); ?>