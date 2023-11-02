<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/css/style.css" />
</head>

<body>
    <header>
        <nav id="navbar" class="navbar navbar-expand-lg fixed-top bg-nav px">
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
                                    <a class="nav-link active" aria-current="page" href="#home">Home</a>
                                </li>
                                <li class="nav-item col">
                                    <a class="nav-link color-black" href="#koleksiku">Koleksiku</a>
                                </li>
                                <li class="nav-item col">
                                    <a class="nav-link color-black" href="#">Log Out</a>
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
    <section id="home">
        <div id="" class="mb-5 d-flex">
            <div class="image-overlay">
                <img src="../assets/image/home2.png" alt="" class="w-100" />
                <div class="image-text col-5 col-lg-4 col-sm-5">
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
        <div>
            <div class="icon-text-container">
                <div class="icon-text">
                    <a href="#astronomi" class="text-decoration">
                        <img src="../assets/image/astronomi.png" alt="" class="w-10" />
                        <p>Astronomi</p>
                    </a>
                </div>
                <div class="icon-text">
                    <a href="#" class="text-decoration">
                        <img src="../assets/image/pendidikan.png" alt="" class="w-10" />
                        <p>Pendidikan</p>
                    </a>
                </div>
                <div class="icon-text">
                    <a href="fiksi" class="text-decoration">
                        <img src="../assets/image/fiksi.png" alt="" class="w-10" />
                        <p>Fiksi</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="astronomi">
            <div class="p-5">
                <div class="">
                    <h3>Astronomi</h3>
                </div>
                <div id="bookContainer" class="overflow-hidden">
                    <!-- <div class="position-absolute"> -->
                    <div id="imgContainer" class="p-3 d-flex align-items-center padding-left position-relative">
                        <div id="imgContent" class="image-container">
                            <a href="#" class="text-decoration">
                                <img class="book-size" src="../assets/image/bukusakti.jpg" alt="" />
                                <div class="caption">
                                    <p class="font-size align-text">
                                        <strong>Buku Sakti</strong>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="image-container book-padding">
                            <a href="#" class="text-decoration">
                                <img class="book-size" src="../assets/image/bukusakti.jpg" alt="" />
                                <div class="caption">
                                    <p class="font-size align-text">
                                        <strong>Buku Sakti</strong>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="image-container book-padding">
                            <a href="#" class="text-decoration">
                                <img class="book-size" src="../assets/image/bukusakti.jpg" alt="" />
                                <div class="caption">
                                    <p class="font-size align-text">
                                        <strong>Buku Sakti</strong>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="image-container book-padding">
                            <a href="#" class="text-decoration">
                                <img class="book-size" src="../assets/image/bukusakti.jpg" alt="" />
                                <div class="caption">
                                    <p class="font-size align-text">
                                        <strong>Buku Sakti</strong>
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="image-container book-padding">
                            <a href="#" class="text-decoration">
                                <img class="book-size" src="../assets/image/bukusakti.jpg" alt="" />
                                <div class="caption">
                                    <p class="font-size align-text">
                                        <strong>Buku Sakti</strong>
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <button>Prev</button>
                        <button onclick="getNextSlide()">Next</button>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </section>
    <script src="../assets/js/script.js"></script>
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

    <!-- <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous">
    </script> -->
</body>

</html>