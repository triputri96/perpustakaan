<?php
include '../../config/koneksi.php';

if ($_SERVER['REQUEST_URI'] == '/pages/admin/buku.php') {
  $dataBuku = [];
  $query = mysqli_query($konek, "SELECT * FROM data_buku");
  while ($buku = mysqli_fetch_array($query)) {
    array_push($dataBuku, $buku);
  }

  return $dataBuku;
}

if (isset($_POST['editBuku'])) {
  $id = $_GET['id'];
  $query = mysqli_query($konek, "SELECT * FROM data_buku WHERE id='$id'");
  if (mysqli_num_rows($query) > 0) {
    $buku = mysqli_fetCh_array($query, MYSQLI_ASSOC);

    return $buku;
  }
}

if (isset($_POST['tambahBuku'])) {
  if (isset($_GET['id']) == "") {
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $genre = $_POST['genre'];
    $deskripsi = $_POST['deskripsi'];

    $query = mysqli_query($konek, "INSERT INTO data_buku (judul, pengarang, genre, deskripsi) VALUES ('$judul', '$pengarang', '$genre', '$deskripsi')");
    if ($query) {
      echo "<script>alert('Sukses'); window.location.href='../../pages/admin/buku.php'</script>";
    }
  } else {
    $id = $_GET['id'];
    $judul = $_POST['judul'];
    $pengarang = $_POST['pengarang'];
    $genre = $_POST['genre'];
    $deskripsi = $_POST['deskripsi'];

    $query = mysqli_query($konek, "UPDATE data_buku SET judul='$judul', pengarang='$pengarang', genre='$genre',deskripsi='$deskripsi' WHERE id='$id'");
    echo $id;
    if ($query) {
      echo "<script>alert('Sukses'); window.location.href='../../pages/admin/buku.php'</script>";
    }
  }
}

if (isset($_POST['deleteBuku'])) {
  $id = $_GET['id'];
  $query = mysqli_query($konek, "DELETE FROM data_buku WHERE id='$id'");
  if ($query) {
    echo "<script>alert('Sukses'); window.location.href='../../pages/admin/buku.php'</script>";
  }
}
