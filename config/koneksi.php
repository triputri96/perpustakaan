<?php
// TODO: kalau gagal konek db, uncomment ni
// $konek = mysqli_connect("localhost", "root", "");
// TODO: comment ini
<<<<<<< HEAD
$konek = mysqli_connect("localhost", "root", "");
=======
$konek = mysqli_connect("localhost", "root", "cakratendados");
>>>>>>> b9be6bc154a7c77a49158fbb946f2187becfea51
$db = mysqli_select_db($konek, "perpus");
// if ($konek) {
//     echo "berhasil";
// }