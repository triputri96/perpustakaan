<?php
include('../../config/koneksi.php');

if ($_SERVER['REQUEST_URI'] == '/pages/admin/user.php') {
  $dataUser = [];
  $query = mysqli_query($konek, "SELECT * FROM data_user");
  if (mysqli_num_rows($query) > 0) {
    while ($user = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
      array_push($dataUser, $user);
    }
  }

  return $dataUser;
}

if (isset($_POST['delete'])) {
  $id = $_GET['id'];
  $query = mysqli_query($konek, "DELETE FROM data_user WHERE id='$id'");
  if ($query) {
    echo "<script>alert('Sukses'); window.location.href='../../pages/admin/user.php'</script>";
  }
}
