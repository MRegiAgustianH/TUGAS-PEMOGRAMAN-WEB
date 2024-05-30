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

    <div id="main-produk">
        <table>
            <tr>
                <th >No</th>
                <th>Nama Game</th>
                <th style="width:200px">Aksi</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Mobile Legends</td>
                <td><a href="data-ml.php">Edit </a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>PUBG Mobile</td>
                <td><a href="data-pubg.php">Edit </a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Valorant</td>
                <td><a href="data-valorant.php">Edit </a></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Genshin Impact</td>
                <td><a href="data-genshin.php">Edit </a></td>
            </tr>

        </table>


    </div>


 

    <footer>
        &copy; Copyright 2024 ALING
    </footer>

    <script src="script.js"></script>

    
</body>
</html>