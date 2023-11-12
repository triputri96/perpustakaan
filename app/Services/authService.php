<?php
include('../../config/koneksi.php');
if (isset($_POST['btnLogin'])) {
    $level = '';
    $username = ($_POST['username']);
    $qlog = mysqli_query($konek, "SELECT * FROM data_user WHERE username='$username'");
    if (mysqli_num_rows($qlog) >= 1) {
        $logged = mysqli_fetch_array($qlog);
        $level = $logged['level'];
        $p = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $password = $_POST['password'];

        $query = mysqli_query($konek, "SELECT * FROM data_user WHERE username='$username' AND level='$level'");
        if (mysqli_num_rows($query) >= 1) {
            $data = mysqli_fetch_array($query);
            if (password_verify($password, $data['password'])) {
                //login valid
                session_start();
                $_SESSION['username'] = $data['username'];
                if ($data['level'] == 'admin') {
                    header('location:../../pages/admin/dashboard.php');
                } else if ($data['level'] == 'user') {
                    header('location:../../pages/user');
                }
            } else {
                //password salah            
                // if ($data['level'] == 'admin') {
                //     header('location:../../pages/admin/auth/login.php');
                // } else if ($data['level'] == 'user') {
                header('location:../../pages/auth/login.php?pesan=Password Salah');
                // }
            }
        } else {
            //Username salah
            header('location:../../pages/auth/login.php?pesan=Username Salah');
        }
    } else {
        header('location:../../pages/auth/login.php?pesan=Username Salah');
    }
}

if (isset($_POST['btnDaftar'])) {
    if ($_POST['level'] != "") {
        session_start();
        if (!empty($_POST['username'])) {
            $_SESSION['user'] = $_POST['username'];
        }
        // if (!empty($_POST['password'])) {
        //     $_SESSION['pass'] = $_POST['password'];
        // }
    }
    if (empty($_POST['username'])) {
        $_SESSION['user'] = $_POST['username'];
        header('location:../../pages/admin/tambahUser.php?pesan=Username harus diisi');
        return;
    }
    if (empty($_POST['password'])) {
        // $_SESSION['pass'] = $_POST['password'];
        header('location:../../pages/admin/tambahUser.php?pesan=Password harus diisi');
        return;
    }
    $username = $_POST['username'];
    $p = password_hash($_POST['password'], PASSWORD_BCRYPT);
    if ($_POST['level'] == "") {
        $level = 'user';
    } else {
        $level = $_POST['level'];
    }

    $query = mysqli_query($konek, "INSERT INTO data_user (username, password, level) VALUES ('$username', '$p', '$level')");
    if ($query) {
        if ($_POST['level'] == "") {
            echo "<script>alert('Sukses'); window.location.href='../../pages/auth/login.php'</script>";
        } else {
            unsetSession();
            echo "<script>alert('Sukses'); window.location.href='../../pages/admin/user.php'</script>";
        }
    }
}

function unsetSession()
{
    unset($_SESSION['user']);
    unset($_SESSION['pass']);
}
