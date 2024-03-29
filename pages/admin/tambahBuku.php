<?php
include('../partials/head.php');
require('../../app/Services/buku.php');
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
    <?php
    include('../partials/navbar.php');
    include('../partials/aside.php');
    ?>
    <div class="content-wrapper">
      <?php include('../partials/breadcrumbs.php'); ?>
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <!-- TODO: kalau pengen ubah warnanya sesuai brand pakai kelas card-form, cek style.css -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Insert <small>Buku Baru</small></h3>
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
                <form enctype="multipart/form-data" id="quickForm" action="<?php if (isset($_GET['editId'])) {
                                                                              echo "../../app/Services/buku.php?updateId=" . $_GET['editId'];
                                                                            } else {
                                                                              echo "../../app/Services/buku.php";
                                                                            } ?>" method="post">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="judul">Judul</label>
                      <input type="judul" name="judul" class="form-control" id="judul" value="<?php if (!is_null($buku)) {
                                                                                                echo $buku['judul'];
                                                                                              } else if (array_key_exists('judul', $_SESSION)) {
                                                                                                echo  $_SESSION['judul'];
                                                                                              } else {
                                                                                                echo '';
                                                                                              } ?>">
                    </div>
                    <div class="form-group">
                      <label for="pengarang">Pengarang</label>
                      <input type="pengarang" name="pengarang" class="form-control" id="pengarang" value="<?php if (!is_null($buku)) {
                                                                                                            echo $buku['pengarang'];
                                                                                                          } else if (array_key_exists('pengarang', $_SESSION)) {
                                                                                                            echo $_SESSION['pengarang'];;
                                                                                                          } else {
                                                                                                            echo '';
                                                                                                          } ?>">
                    </div>
                    <div class="form-group">
                      <label for="genre">Genre</label>
                      <input type="genre" name="genre" class="form-control" id="genre" value="<?php if (!is_null($buku)) {
                                                                                                echo $buku['genre'];
                                                                                              } else if (array_key_exists('genre', $_SESSION)) {
                                                                                                echo $_SESSION['genre'];
                                                                                              } else {
                                                                                                echo '';
                                                                                              } ?>">
                    </div>
                    <div class="form-group">
                      <label for="deskripsi">Deskripsi</label>
                      <input type="deskripsi" name="deskripsi" class="form-control" id="deskripsi" value="<?php if (!is_null($buku)) {
                                                                                                            echo $buku['deskripsi'];
                                                                                                          } else if (array_key_exists('deskripsi', $_SESSION)) {
                                                                                                            echo $_SESSION['deskripsi'];
                                                                                                          } else {
                                                                                                            echo '';
                                                                                                          } ?>">
                    </div>
                    <div class="form-group">
                      <?php if (!is_null($buku) && isset($buku['cover'])) : ?>
                        <input type="hidden" name="currentCover" value="<?php echo $buku['cover']; ?>">
                      <?php endif; ?>
                    </div>

                    <div class="form-group">
                      <label for="cover">Cover</label>
                      <input type="file" name="coverImg" class="form-control" id="cover" value="">
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" name="tambahBuku" class="btn btn-color">Submit</button>
                    <a href="../admin/buku.php" class="btn btn-color">
                      Keluar
                    </a>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-6">
            </div>
          </div>
        </div>
      </section>
    </div>
    <?php include('../partials/footer.php'); ?>
  </div>
  <?php include('../partials/scripts.php') ?>
  <script>
    function closeAlert() {
      var myAlert = document.getElementById('myAlert');
      myAlert.style.display = 'none';
    }
  </script>