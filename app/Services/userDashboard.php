<?php
include '../../config/koneksi.php';

if ($_SERVER['REQUEST_URI'] == '/pages/user/') {
  $dataBuku = [];
  $query = mysqli_query($konek, "SELECT * FROM data_buku");
  while ($buku = mysqli_fetch_array($query)) {
    array_push($dataBuku, $buku);
  }

  return $dataBuku;
}

if (isset($_POST['pinjamBuku'])) {
  $id = $_GET['id'];
  $user_id = $_POST['user_id'];
  $buku_id = $_POST['buku_id'];
  $tgl_pinjam = $_POST['tgl_pinjam'];

  $query = mysqli_query($konek, "INSERT INTO data_peminjaman (user_id, buku_id, tgl_pinjam) VALUES ('$user_id', '$buku_id', '$tgl_pinjam')");
  if ($query) {
    echo "<script>alert('Sukses'); window.location.href='../../pages/admin/buku.php'</script>";
  }
}
