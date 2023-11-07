<?php
include('../../config/koneksi.php');

if (isset($_POST['delete'])) {
  $id = $_GET['id'];
  $query = mysqli_query($konek, "DELETE FROM data_user WHERE id='$id'");
  if ($query) {
    echo "<script>alert('Sukses'); window.location.href='../../pages/admin/user.php'</script>";
  }
}
