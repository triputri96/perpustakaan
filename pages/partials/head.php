<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Perpustakaan | Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/css/style.css">

</head>

<?php
include '../../config/koneksi.php';

session_start();
if (!isset($_SESSION['username'])) {
  header('location:../auth/login.php');
} else {
  $username = $_SESSION['username'];
  $q = "SELECT level FROM data_user WHERE username='$username'";
  $sql = mysqli_query($konek, $q)->fetch_assoc();
  if ($sql['level'] == 'user') {
    header('location:../404.php');
  }
}
?>