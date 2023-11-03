<?php
include 'koneksi.php';
if (isset($_POST['btnLogin'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($konek, "SELECT * FROM data_user WHERE username='$username'");
    $data = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) >= 1) {
        if (password_verify($password, $data['password'])) {
            //login valid
            session_start();
            $_SESSION['username'] = $data['username'];
            header('location:index.php');
        } else {
            //password salah
            header('location:login.php?pesan=Password Salah');
        }
    } else {
        //Username salah
        header('location:login.php?pesan=Username Salah');
    }
}