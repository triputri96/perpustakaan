<?php
include '../../config/koneksi.php';
// first initialization
$buku = null;

if (isset($_POST['editBuku'])) {
  $id = $_GET['id'];
  $query = mysqli_query($konek, "SELECT * FROM data_buku WHERE id='$id'");
  if (mysqli_num_rows($query) > 0) {
    $buku = mysqli_fetch_array($query, MYSQLI_ASSOC);

    return $buku;
  }
}

if (isset($_GET['editId'])) {
  $id = $_GET['editId'];
  $query = mysqli_query($konek, "SELECT * FROM data_buku WHERE id='$id'");
  if (mysqli_num_rows($query) > 0) {
    $buku = mysqli_fetch_array($query, MYSQLI_ASSOC);

    return $buku;
  }
}

if (isset($_POST['tambahBuku'])) {
  $judul = mysqli_escape_string($konek, $_POST['judul']);
  $pengarang = mysqli_escape_string($konek, $_POST['pengarang']);
  $genre = $_POST['genre'];
  $deskripsi = mysqli_escape_string($konek, $_POST['deskripsi']);
  // trying saving image
  $targetDir = '../../dist/uploads/';
  $saveTargetDir = '/dist/uploads/';
  $baseName = basename($_FILES['coverImg']['name']);
  $targetFile = $targetDir . $baseName;
  // $imageFilterType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
  $cover = $baseName;
  if (!isset($_GET['updateId'])) {
    // $judul = $_POST['judul'];
    // $pengarang = $_POST['pengarang'];
    // $genre = $_POST['genre'];
    // $deskripsi = $_POST['deskripsi'];
    move_uploaded_file($_FILES['coverImg']['tmp_name'], $targetFile);
    $query = mysqli_query($konek, "INSERT INTO data_buku (judul, pengarang, genre, deskripsi, cover) VALUES ('$judul', '$pengarang', '$genre', '$deskripsi', '$cover')");
    if ($query) {
      echo "<script>alert('Sukses'); window.location.href='../../pages/admin/buku.php'</script>";
    }
  } else {
    $id = $_GET['updateId'];
<<<<<<< HEAD
    if ($_FILES['coverImg']['name'] != "") {
      $queryHapus = mysqli_query($konek, "SELECT cover from data_buku where id='$id'");
      $buku = mysqli_fetch_array($queryHapus);

      unlink("../../dist/uploads/" . $buku['cover']);

      $targetDir = '../../dist/uploads/';
      $saveTargetDir = '/dist/uploads/';
      $baseName = basename($_FILES['coverImg']['name']);
      $targetFile = $targetDir . $baseName;
      // $imageFilterType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
      $cover = $baseName;
      move_uploaded_file($_FILES['coverImg']['tmp_name'], $targetFile);

      $query = mysqli_query($konek, "UPDATE data_buku SET judul='$judul',pengarang='$pengarang', genre='$genre', deskripsi='$deskripsi', cover='$cover' WHERE id='$id'");
      if ($query) {
        echo "<script>alert('Sukses'); window.location.href='../../pages/admin/buku.php'</script>";
      }
    } else {
      # code...
      $query = mysqli_query($konek, "UPDATE data_buku SET judul='$judul',pengarang='$pengarang', genre='$genre', deskripsi='$deskripsi' WHERE id='$id'");
      if ($query) {
        echo "<script>alert('Sukses'); window.location.href='../../pages/admin/buku.php'</script>";
      }
=======
    $query = mysqli_query($konek, "UPDATE data_buku SET judul='$judul',pengarang='$pengarang', genre='$genre', deskripsi='$deskripsi', cover='$cover' WHERE id='$id'");
    if ($query) {
      echo "<script>alert('Sukses'); window.location.href='../../pages/admin/buku.php'</script>";
>>>>>>> b9be6bc154a7c77a49158fbb946f2187becfea51
    }
  }
}

if (isset($_POST['deleteBuku'])) {
  $id = $_GET['id'];
<<<<<<< HEAD
  $queryHapus = mysqli_query($konek, "SELECT cover from data_buku where id='$id'");
  $buku = mysqli_fetch_array($queryHapus);

  unlink("../../dist/uploads/" . $buku['cover']);

=======
>>>>>>> b9be6bc154a7c77a49158fbb946f2187becfea51
  $query = mysqli_query($konek, "DELETE FROM data_buku WHERE id='$id'");
  if ($query) {
    echo "<script>alert('Sukses'); window.location.href='../../pages/admin/buku.php'</script>";
  }
<<<<<<< HEAD
}
=======
}
>>>>>>> b9be6bc154a7c77a49158fbb946f2187becfea51