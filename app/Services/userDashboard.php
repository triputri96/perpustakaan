<?php
include '../../config/koneksi.php';

if (isset($_POST['pinjamBuku'])) {
  if (isset($_GET['idBuku']) != "") {
    session_start();
    $username = $_SESSION['username'];
    $id = $_GET['idBuku'];
    $qlog = mysqli_query($konek, "SELECT id FROM data_user WHERE username='$username'");
    $logged = mysqli_fetch_array($qlog);
    $user_id = $logged['id'];
    $tgl_pinjam = date('Y-m-d H:i:s');
    $query = mysqli_query($konek, "INSERT INTO data_peminjaman (user_id, buku_id, tgl_pinjam) VALUES ('$user_id', '$id', '$tgl_pinjam')");
    if ($query) {
      echo "<script> history.back()</script>";
    }
  }
}

if (isset($_POST['btnKembalikan'])) {
  $id = $_GET['idPeminjaman'];
  $qExist = mysqli_query($konek, "SELECT * FROM data_peminjaman WHERE id='$id' AND is_returned='1'");
  if (mysqli_num_rows($qExist) > 0) {
    echo header('location: ../../pages/user/koleksi.php');
    return;
  }
  $tgl_kembali = date('Y-m-d H:i:s');
  $query = mysqli_query($konek, "UPDATE data_peminjaman SET is_returned='1', tgl_kembali='$tgl_kembali' WHERE id='$id'");
  if ($query) {
    echo "<script> history.back()</script>";
  }
}
