<?php
// TODO: kalau gagal konek db, uncomment ni
// $konek = mysqli_connect("localhost", "root", "");
// TODO: comment ini
$konek = mysqli_connect("localhost", "root", "cakratendados");
$db = mysqli_select_db($konek, "perpus");
// if ($konek) {
//     echo "berhasil";
// }