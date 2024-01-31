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
  session_start();
  if (!empty($_POST['judul'])) {
    $_SESSION['judul'] = $_POST['judul'];
  }
  if (!empty($_POST['pengarang'])) {
    $_SESSION['pengarang'] = $_POST['pengarang'];
  }
  if (!empty($_POST['genre'])) {
    $_SESSION['genre'] = $_POST['genre'];
  }
  if (!empty($_POST['deskripsi'])) {
    $_SESSION['deskripsi'] = $_POST['deskripsi'];
  }
  if (isset($_GET['editId']) && empty($_FILES['coverImg']['name'])) {
    $_SESSION['coverImg']['name'] = ''; // Set an empty value for cover image
    if (isset($buku['cover'])) {
      $_SESSION['coverImg']['name'] = $buku['cover'];
    }
  }

  // CHECK IS EMPTY OR NOT
  if (empty($_POST['judul'])) {
    $_SESSION['judul'] = $_POST['judul'];
    header('location:../../pages/admin/tambahBuku.php?pesan=Judul harus diisi');
    return;
  }
  if (empty($_POST['pengarang'])) {
    $_SESSION['pengarang'] = $_POST['pengarang'];
    header('location:../../pages/admin/tambahBuku.php?pesan=Pengarang harus diisi');
    return;
  }
  if (empty($_POST['genre'])) {
    $_SESSION['genre'] = $_POST['genre'];
    header('location:../../pages/admin/tambahBuku.php?pesan=Genre harus diisi');
    return;
  }
  if (empty($_POST['deskripsi'])) {
    $_SESSION['deskripsi'] = $_POST['deskripsi'];
    header('location:../../pages/admin/tambahBuku.php?pesan=Deskripsi harus diisi');
    return;
  }
  if (empty($_FILES['coverImg']['name']) && empty($_POST['currentCover'])) {
    header('location:../../pages/admin/tambahBuku.php?pesan=Cover buku harus diisi');
    return;
  }

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
      unsetSession();
      echo "<script>alert('Sukses'); window.location.href='../../pages/admin/buku.php'</script>";
    }
  } else {
    $id = $_GET['updateId'];
    if ($_FILES['coverImg']['name'] != "") {
      $queryHapus = mysqli_query($konek, "SELECT cover from data_buku where id='$id'");
      $buku = mysqli_fetch_array($queryHapus);
      // remove pict from folder
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
        unsetSession();
        echo "<script>alert('Sukses'); window.location.href='../../pages/admin/buku.php'</script>";
      }
    } else {
      $query = mysqli_query($konek, "UPDATE data_buku SET judul='$judul',pengarang='$pengarang', genre='$genre', deskripsi='$deskripsi' WHERE id='$id'");
      if ($query) {
        unsetSession();
        echo "<script>alert('Sukses'); window.location.href='../../pages/admin/buku.php'</script>";
      }
    }
  }
}

function unsetSession()
{
  unset($_SESSION['judul']);
  unset($_SESSION['pengarang']);
  unset($_SESSION['genre']);
  unset($_SESSION['deskripsi']);
}

if (isset($_POST['deleteBuku'])) {
  $id = $_GET['id'];
  $queryHapus = mysqli_query($konek, "SELECT cover from data_buku where id='$id'");
  $buku = mysqli_fetch_array($queryHapus);

  unlink("../../dist/uploads/" . $buku['cover']);

  $query = mysqli_query($konek, "DELETE FROM data_buku WHERE id='$id'");
  if ($query) {
    echo "<script>alert('Sukses'); window.location.href='../../pages/admin/buku.php'</script>";
  }
}
