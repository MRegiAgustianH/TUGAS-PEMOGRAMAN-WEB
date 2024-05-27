<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LING STORE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="register">
    <div class="box-register">
        <h2>REGISTER</h2>
        <form action="" method="POST">
            <label for="">Nama</label>
            <input type="text" name="nama" placeholder="Nama Lengkap" class="input" required>
            <label for="">Username</label>
            <input type="username" name="username" placeholder="Username" class="input" required>
            <label for="">Password</label>
            <input type="password" name="password" placeholder="Password" class="input" required>
            <label for="">Confirm Password</label>
            <input type="password" name="confirm-password" placeholder="Confirm Password" class="input" required>
            <button type="submit" name="submit" class="btn">Register</button>
        </form>
        <div class="footer-register">
            Sudah punya akun? <a href="login.php">Login</a> disini
        </div>
    </div>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
        include  'Database.php';

        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm-password'];

        if ($password!= $confirm_password) {
            echo "<script>alert('Passsword Tidak Sama !')</script>";
            return;
        }

    $query = "INSERT INTO user (nama, username, password,confirm_password) VALUES ('$nama', '$username', '$password', '$confirm_password')";
    $result = mysqli_query($conn, $query);
    if($result){
        echo "<script>alert('Registrasi Berhasil')</script>";
        echo "<script>window.location='login.php'</script>";
    }else{
        echo "<script>alert('Registrasi GAGAL')</script>";
    }

}