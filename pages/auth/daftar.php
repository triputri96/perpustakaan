<!DOCTYPE html>
<?php
session_start();
if (isset($_SESSION['username'])) {
    header('location:../404.php');
}
?>

<head>
    <meta charset="utf-8">
    <title>Daftar | Perpustakaan</title>
    <link rel="stylesheet" href="../../dist/css/login.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="wrapper">
        <div class="title">
            Daftar
        </div>
        <?php
        if (isset($_GET['pesan'])) {

        ?>

        <div id="myAlert" class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Daftar Gagal!</strong>
            <?php echo $_GET['pesan']; ?>
            <button type="button" class="btn-close" aria-label="Close" onclick="closeAlert()"></button>
        </div>
        <?php
        }
        ?>
        <form action="../../app/Services/authService.php" method="post">
            <div class="field">
                <input type="text" id="username" name="username" required>
                <label for="username">Username</label>
            </div>
            <div class="field">
                <input type="password" id="password" name="password" required>
                <label for="password">Password</label>
            </div>
            <div class="field">
                <input type="submit" value="Daftar" name="btnDaftar">
            </div>
            <div class="signup-link">
                Sudah punya akun? <a href="../auth/login.php">Login sekarang</a>
            </div>
        </form>
    </div>
    <script>
    function closeAlert() {
        var myAlert = document.getElementById('myAlert');
        myAlert.style.display = 'none';
    }
    </script>
</body>

</html>