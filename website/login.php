<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION['nis'])) {
    header('location:index.php');
}
?>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Login Form Design | CodeLab</title>
    <link rel="stylesheet" href="../assets/css/login.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="wrapper">
        <div class="title">
            Login Form
        </div>
        <?php
        if (isset($_GET['pesan'])) {

        ?>

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Login Gagal!</strong>
                <?php echo $_GET['pesan']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        }
        ?>
        <form action="ceklogin.php" method="post">
            <div class="field">
                <input type="text" id="username" name="username" required>
                <label for="username">Username</label>
            </div>
            <div class="field">
                <input type="password" id="password" name="password" required>
                <label for="password">Password</label>
            </div>
            <div class="field">
                <input type="submit" value="Login" name="btnLogin">
            </div>
            <div class="signup-link">
                Tidak punya akun? <a href="daftar.php">Signup now</a>
            </div>
        </form>
    </div>
</body>

</html>