<?php
session_start();
include 'Database.php';
if (isset($_SESSION['id']) &&!empty($_SESSION['id'])) {
    $query = "SELECT * FROM user WHERE id = '". $_SESSION['id']. "'";
    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_object($result);
} else {
    echo "<script>";
    echo "window.location='login.php';";
    echo "</script>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LING STORE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

        <header>
        <nav class="wrapper">
            <a href="Dashboard.php"><h2>LING STORE</h2></a>
            <ul class="navigation">
                <li><a href="edit-tentang.php">Tentang</a></li>
                <img src="asset/histori.svg" alt="">
                <li><a href="histori.php">Histori</a></li>
                <img src="asset/dataproduk.svg" alt="">
                <li><a href="produk.php">Data Produk</a></li>
                <img src="asset/profile.svg" alt="">
                <li><a href="profile.php">Profile</a></li>
                <img src="asset/logout.svg" alt="">
                <li><a href="keluar.php">Keluar</a></li>
                
            </ul>     
        </nav>
        </header>

        <div id="profile">
            <div class="box-profile">
                <h3>Profil <?php echo $data->nama;?> </h3>
                <form action="profile.php" method="POST">
                    
                    <input type="text" name="nama" placeholder="Nama Lengkap" class="input" value="<?php echo $data->nama?>" required>
                    <input type="text" name="username" placeholder="Username" class="input" value="<?php echo $data->username?>" required>
                    <input type="submit" name="submit" value="Update Profile" class="btn">
                </form>

            </div>
            <div class="box-password">
                <h3>Ubah Password</h3>
                <form action="profile.php" method="POST">
                    <input type="text" name="passbaru1" placeholder="Password Baru" class="input" required>
                    <input type="text" name="passbaru2" placeholder="Konfirmasi Password Baru" class="input" required>
                    <input type="submit" name="submit-pass" value="Ubah Password" class="btn">
                </form>
            </div>
            
        </div>
        
         <footer>
            &copy; Copyright 2024 ALING
         </footer>
        <script src="script.js"></script>

</body>
</html> 

<?php

include('Database.php');
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $username = $_POST['username'];

    $query = "UPDATE user SET nama='$nama', username='$username' WHERE id='".$data->id."'";
    $result = mysqli_query($conn, $query);
    if($result){
        echo "<script>alert('Data Berhasil di ubah')</script>";
        echo "<script>window.location='profile.php'</script>";
       
        }else{
            echo 'gagal';
    }
}

if(isset($_POST['submit-pass'])){
    $passbaru1 = $_POST['passbaru1'];
    $passbaru2 = $_POST['passbaru2'];
    if($passbaru1==$passbaru2){
        $query = "UPDATE user SET password='$passbaru1', confirm_password = '$passbaru2' WHERE id='".$data->id."'";
        $result = mysqli_query($conn, $query);
        echo "<script>alert('Password Berhasil di ubah !')</script>";
        echo "<script>window.location='profile.php'</script>";
    }else{
        echo "<script>alert('Passsword Tidak Sama !')</script>";
        return;
    }
}
?>

