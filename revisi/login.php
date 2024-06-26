<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LING STORE</title>
</head>
<body>
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            font-family: poppins;
            font-size: 16px;
            color: #fff;
        }
        .form-box {
            background-color: rgba(0, 0, 0, 0.5);
            margin: auto auto;
            padding: 40px;
            border-radius: 5px;
            box-shadow: 0 0 10px #000;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 500px;
            height: 400px;
        }
        .form-box:before {
            background-image: url("asset/wallpaper2.png");
            width: 100%;
            height: 100%;
            background-size: cover;
            content: "";
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: -1;
            display: block;
            filter: blur(2px);
        }
        .form-box .header-text {
            font-size: 32px;
            font-weight: 600;
            padding-bottom: 30px;
            text-align: center;
        }
        .form-box input {
            margin: 10px 0px;
            border: none;
            padding: 10px;
            border-radius: 5px;
            width: 100%;
            font-size: 18px;
            font-family: poppins;
        }
        .form-box label {
            position: relative;
            margin-left: 5px;
            margin-right: 10px;
            top: 5px;
            display: inline-block;
            width: 20px;
            height: 20px;
            cursor: pointer;
        }
        .form-box label:before {
            content: "";
            display: inline-block;
            width: 20px;
            height: 20px;
            border-radius: 5px;
            position: absolute;
            left: 0;
            bottom: 1px;
            background-color: #ddd;
        }
        .form-box span {
            font-size: 14px;
        }
        .form-box button {
            background-color: deepskyblue;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 25%;
            font-size: 18px;
            padding: 10px;
            margin: 20px 0px;
        }
        button a{
            text-decoration:none !important;
            color:white;
        }
        span a {
            color: #BBB;
        }
    </style>
    <div class="form-box">
		<div class="header-text">
			Login Admin
		</div>
        <form action="" method="POST">
        <input placeholder="Username" name="username" type="text" required> 
        <input placeholder="Password" name="password" type="password" required> 
        <button name="login">login</button>
        <button><a href="register.php">Register</a></button>
        </form>
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
