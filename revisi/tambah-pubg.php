<?php
session_start();
// Cek apakah session status sudah true
if ($_SESSION['status'] != true) {
    // Jika false, alihkan ke halaman login.php
    header('Location: login.php');
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
                <li><a href="profile.php" >Profile</a></li>
                <img src="asset/logout.svg" alt="">
                <li><a href="keluar.php">Keluar</a></li>
                
            </ul>     
        </nav>
        </header>

    <section>
        <div class="mainIklan">
            <div class="iklan1"> <img src="asset/poster_pubg2.jpeg" > </div>
            <div class="iklan2">
                <div class="iklan21"> <img src="asset/poster_ML.webp" alt=""> </div>
                <div class="iklan22"> <img src="asset/poster_valorant.jpg" alt=""> </div>
            </div>
        </div>
        
    </section>
    <div class="box-data">
        <form action="" method="POST">
                <input type="text" name="jumlah_uc" placeholder="Jumlah UC" class="input" required>
                <input type="text" name="harga" placeholder="Harga" class="input"  required>
                <input type="submit" name="tambah" value="Tambah Produk" class="btn">
        </form>
    </div>
    
 

    <footer>
        &copy; Copyright 2024 ALING
    </footer>

    <script src="script.js"></script>

    
</body>
</html>

<?php
include 'Database.php';
if(isset($_POST['tambah'])){
    $jumlah_uc = $_POST['jumlah_uc'];
    $harga = $_POST['harga'];
    $query = "INSERT INTO data_pubg (jumlah_uc, harga) VALUES ('$jumlah_uc', '$harga')";
    $result = mysqli_query($conn, $query);
    if($result){
        echo "<script>alert('Berhasil Tambah Produk')</script>";
        echo "<script>window.location='data-pubg.php'</script>";
    }else{
        echo "<script>alert('Tambah GAGAL')</script>";
    }
}

?>