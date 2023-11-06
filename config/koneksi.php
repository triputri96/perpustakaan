<?php
// TODO: kalau gagal konek db, uncomment ni
// $konek = mysqli_connect("localhost", "root", "");
// TODO: comment ini
<<<<<<< HEAD
$konek = mysqli_connect("localhost", "root", "");
=======
$konek = mysqli_connect("localhost", "root", "cakratendados");
>>>>>>> fc048b6512fc8e401459214d95d7078120da1f1f
$db = mysqli_select_db($konek, "perpus");
// if ($konek) {
//     echo "berhasil";
// }