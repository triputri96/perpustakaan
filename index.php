<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Perpustakaan</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
	<link rel="stylesheet" href="./dist/css/style.css" />
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
			<div class="d-flex justify-content-evenly">
				<div class="">
					<a href="#astronomi" class="text-decoration-none text-dark">
						<img src="./dist/img/astronomi.png" alt="" width="100" />
						<p class="font-25">Astronomi</p>
					</a>
				</div>
				<div class="">
					<a href="#" class="text-decoration-none text-dark">
						<img src="./dist/img/pendidikan.png" alt="" width="100" />
						<p class="font-25">Pendidikan</p>
					</a>
				</div>
				<div class="">
					<a href="fiksi" class="text-decoration-none text-dark">
						<img src="./dist/img/fiksi.png" alt="" width="100" />
						<p class="font-25">Fiksi</p>
					</a>
				</div>
			</div>

			<div class="astronomi">
				<div class="p-5">
					<div class="">
						<h3>Astronomi</h3>
					</div>
					<div id="bookContainer" class="position-relative overflow-hidden" style="height:350px;">
						<div id="imgContainer" class="pt-3 position-absolute d-flex">
							<div class="image-container book-padding">
								<a href=" #" class="text-decoration-none text-dark">
									<img class="book-size" src="./dist/img/bukusakti.jpg" alt="" />
									<div class="caption">
										<p class="font-size align-text">
											<strong>Buku Sakti First</strong>
										</p>
									</div>
								</a>
							</div>
							<div class="image-container book-padding">
								<a href="#" class="text-decoration-none text-dark">
									<img class="book-size" src="./dist/img/bukusakti.jpg" alt="" />
									<div class="caption">
										<p class="font-size align-text">
											<strong>Buku Sakti</strong>
										</p>
									</div>
								</a>
							</div>
							<div class="image-container book-padding">
								<a href="#" class="text-decoration-none text-dark">
									<img class="book-size" src="./dist/img/bukusakti.jpg" alt="" />
									<div class="caption">
										<p class="font-size align-text">
											<strong>Buku Sakti</strong>
										</p>
									</div>
								</a>
							</div>
							<div class="image-container book-padding">
								<a href="#" class="text-decoration-none text-dark">
									<img class="book-size" src="./dist/img/bukusakti.jpg" alt="" />
									<div class="caption">
										<p class="font-size align-text">
											<strong>Buku Sakti</strong>
										</p>
									</div>
								</a>
							</div>
							<div class="image-container book-padding">
								<a href="#" class="text-decoration-none text-dark">
									<img class="book-size" src="./dist/img/bukusakti.jpg" alt="" />
									<div class="caption">
										<p class="font-size align-text">
											<strong>Buku Sakti</strong>
										</p>
									</div>
								</a>
							</div>

							<div class="image-container">
								<a href="#" class="text-decoration-none text-dark">
									<img class="book-size" src="./dist/img/bukusakti.jpg" alt="" />
									<div class="caption">
										<p class="font-size align-text">
											<strong>Buku Sakti Last</strong>
										</p>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div>
						<button id="prevBtn" disabled onclick="getPrevSlide()">Prev</button>
						<button id="nextBtn" onclick="getNextSlide()">Next</button>
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