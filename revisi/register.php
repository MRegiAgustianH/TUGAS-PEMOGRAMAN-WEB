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
            height: 470px;
        }
        .form-box:before {
            background-image: url("asset/wallpaper.jpg");
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
        span a {
            color: #BBB;
        }
    </style>
    <div class="form-box">
		<div class="header-text">
			Register
		</div>
        <form action="" method="POST">
            <input name="nama"placeholder="Nama" type="text" required> 
            <input name="username" placeholder="Username" type="text" required> 
            <input name="password" placeholder="Password" type="password" required> 
            <input name="confirm-password" placeholder="confirm-password" type="password" required> 
            <button type="submit" name="register">Register</button>
        </form>
        
	</div>
</body>
</html>

<?php
if (isset($_POST['register'])) {
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