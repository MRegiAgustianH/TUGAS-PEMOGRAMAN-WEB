<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LING STORE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="login">
    <div class="box-login">
        <h2 style="color:#E1AFD1">LOGIN</h2>
        <form action="login.php" method="POST">
            <input type="username" name="username" placeholder="Username" class="input">
            <input type="password" name="password" placeholder="Password" class="input">
            <input type="submit" name="login" value="Login" class="btn">        
        </form>  
        <div class="footer-login">
            <a href="register.php">Daftar Brow !</a>
        </div>
    </div>
    
    
</body>
</html>


<?php

if(isset($_POST['login'])){
    session_start();
    include('Database.php');
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query ke database
    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);
    echo mysqli_num_rows($result);
    if(mysqli_num_rows($result) > 0){
        // Jika data ditemukan, arahkan ke index.php
        $data = mysqli_fetch_object($result);
        $_SESSION['status'] = true;
        $_SESSION['data_global'] = $data ;
        $_SESSION['id']= $data->id;
        header('Location: Dashboard.php');
        exit;
    } else {
        // Jika data tidak ditemukan, tampilkan peringatan
        echo "<script>alert('Username atau password salah')</script>";
    }
}   
?>