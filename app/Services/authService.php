<?php
include('../../config/koneksi.php');
if (isset($_POST['btnLoginAdmin']) || isset($_POST['btnLoginUser'])) {
    $username = $_POST['username'];
    $p = password_hash($_POST['password'], PASSWORD_BCRYPT);
    echo $p;
    $password = $_POST['password'];
    if (isset($_POST['btnLoginAdmin'])) {
        $level = 'admin';
    } else if (isset($_POST['btnLoginUser'])) {
        $level = 'user';
    }

    $query = mysqli_query($konek, "SELECT * FROM data_user WHERE username='$username' AND level='$level'");
    $data = mysqli_fetch_array($query);
    if (mysqli_num_rows($query) >= 1) {
        if (password_verify($password, $data['password'])) {
            //login valid
            session_start();
            $_SESSION['username'] = $data['username'];
            if ($data['level'] == 'admin') {
                header('location:../../pages/admin/dashboard.php');
            } else if ($data['level'] == 'user') {
                header('location:../../pages/user/index.php');
            }
        } else {
            //password salah            
            if ($data['level'] == 'admin') {
                header('location:../../pages/admin/auth/login.php');
            } else if ($data['level'] == 'user') {
                header('location:../../pages/auth/login.php?pesan=Password Salah');
            }
        }
    } else {
        //Username salah
        if ($level == 'admin') {
            header('location:../../pages/admin/auth/login.php?pesan=Username Salah');
        } else if ($level == 'user') {
            header('location:../../pages/auth/login.php?pesan=Username Salah');
        }
    }
}

if (isset($_POST['btnDaftar'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    if ($_POST['level'] == "") {
        $level = 'user';
    } else {
        $level = $_POST['level'];
    }

    $query = mysqli_query($konek, "INSERT INTO data_user (username, password, level) VALUES ('$username', '$password', '$level')");
    if ($query) {
        if ($_POST['level'] == "") {
            echo "<script>alert('Sukses'); window.location.href='../../pages/auth/login.php'</script>";
        } else {
            echo "<script>alert('Sukses'); window.location.href='../../pages/admin/user.php'</script>";
        }
    }
}
