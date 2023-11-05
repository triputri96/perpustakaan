<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Perpustakaan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="../../dist/css/style.css" />
</head>

<body>
  <header>
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top bg-nav">
      <div class="container-fluid navbar-container">
        <a class="navbar-brand" href="#">Logo</a>
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
                  <a class="nav-link color-black" href="#koleksiku">Koleksiku</a>
                </li>
                <li class="nav-item col">
                  <a class="nav-link color-black" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                      <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                      <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                    </svg></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-success" type="submit">
            Search
          </button>
        </form>
      </div>
    </nav>
  </header>
  <?php require('../../app/Services/userDashboard.php') ?>
  <section id="pinjamBuku">
    <div style="  height: 100vh;padding: 100px 100px;">
      <div class="card">
        <div class="card-body p-0">
          <form id="quickForm" action="../../app/Services/authService.php" method="post">
            <div class="card-body">
              <div class="row">
                <div class="col-6">
                  <div class="d-flex justify-content-center">
                    <img src="../../dist/img/bukusakti.jpg" alt="" width="300">
                  </div>
                  <div class="d-flex justify-content-center">
                    <button type="submit" name="btnDaftar" class="mt-2 btn btn-info">Pinjam Buku</button>
                  </div>
                </div>
                <div class="col-6">
                  <!-- <div class="form-group">
                      <label for="deskripsi">Deskripsi</label>
                      <input type="deskripsi" name="deskripsi" class="form-control" id="deskripsi">
                    </div> -->
                  <div>
                    <h5>Deskripsi</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates ullam voluptatem optio quod sapiente deserunt doloribus commodi quis veritatis reprehenderit nesciunt necessitatibus eos, sed recusandae blanditiis incidunt? Quam, doloribus optio.</p>
                  </div>
                  <div>
                    <table class="table table-head-fixed text-nowrap">
                      <thead>
                        <tr>
                          <th class="col-1">Table Of Content</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>page 1</td>
                        </tr>
                        <tr>
                          <td>page 2</td>
                        </tr>
                        <tr>
                          <td>page 3</td>
                        </tr>
                        <tr>
                          <td>page 4</td>
                        </tr>
                        <tr>
                          <td>page 5</td>
                        </tr>
                      </tbody>
                    </table>
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
  <script src="./dist/js/script.js"></script>
  <script>
    window.addEventListener("scroll", function() {
      var navbar = document.getElementById("navbar");
      if (window.scrollY > 50) {
        navbar.style.backgroundColor = "rgba(248, 252, 251, 1)"; // Warna transparan
        navbar.style.transform = "translateY(-10px)"; // Geser navbar ke atas
      } else {
        navbar.style.backgroundColor = "transparent";
        navbar.style.transform = "translateY(0)"; // Reset posisi navbar
      }
    });
  </script>
</body>

</html>