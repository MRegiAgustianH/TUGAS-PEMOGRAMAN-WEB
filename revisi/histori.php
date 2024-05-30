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
    <style>
        #container {
            width: 100%;
            min-height: 100vh;
        }

        .histori {
            width: 300px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            font-family: 'Courier New', Courier, monospace;
            font-size: 14px;
        }

        .histori-item {
            margin-bottom: 20px;
            padding: 10px;
            border-bottom: 1px dashed #ccc;
        }

        .histori-item:last-child {
            border-bottom: none;
        }

        .histori-item p {
            margin: 5px 0;
        }

        .histori-item .transaction-id {
            font-weight: bold;
            margin-bottom: 10px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 5px;
        }

        .histori-item .product-name {
            color: #000;
        }

        .histori-item .quantity,
        .histori-item .price,
        .histori-item .payment-method,
        .histori-item .date,
        .histori-item .status {
            display: flex;
            justify-content: space-between;
            margin: 2px 0;
        }

        .histori-item .quantity span,
        .histori-item .price span,
        .histori-item .payment-method span,
        .histori-item .date span,
        .histori-item .status span {
            font-weight: bold;
        }
    </style>

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

    <section>
        <div class="mainIklan">
            <div class="iklan1"><img src="asset/poster_pubg2.jpeg"></div>
            <div class="iklan2">
                <div class="iklan21"><img src="asset/poster_ML.webp" alt=""></div>
                <div class="iklan22"><img src="asset/poster_valorant.jpg" alt=""></div>
            </div>
        </div>
    </section>

    <div class="histori">
        <h2>Mobile Legends</h2>
        <?php
        include 'Database.php';

        $sql = "SELECT * FROM transaksi_ml";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div class="histori-item">
                    <p class="transaction-id">ID Transaksi: <?= $row["id"] ?></p>
                    <p class="product-name">Nama: <?= $row["nama"] ?></p>
                    <p class="quantity">Jumlah Dm: <span><?= $row["jumlah_dm"] ?></span></p>
                    <p class="price">Harga: <span><?= $row["harga"] ?></span></p>
                    <p class="payment-method">Metode Pembayaran: <span><?= $row["metode_pembayaran"] ?></span></p>
                    <p class="date">Date: <span><?= $row["tgl_pembelian"] ?></span></p>
                    <p class="status">Status: <span><?= $row["status"] ?></span></p>
                </div>
        <?php
            }
        } else {
            echo "No transactions found.";
        }

        mysqli_close($conn);
        ?>
    </div>

    <div class="histori">
        <h2>PUBG Mobile</h2>
        <?php
        include 'Database.php';

        $sql = "SELECT * FROM transaksi_pubg";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div class="histori-item">
                    <p class="transaction-id">ID Transaksi: <?= $row["id"] ?></p>
                    <p class="product-name">Nama: <?= $row["nama"] ?></p>
                    <p class="quantity">Jumlah UC: <span><?= $row["jumlah_uc"] ?></span></p>
                    <p class="price">Harga: <span><?= $row["harga"] ?></span></p>
                    <p class="payment-method">Metode Pembayaran: <span><?= $row["metode_pembayaran"] ?></span></p>
                    <p class="date">Date: <span><?= $row["tgl_pembelian"] ?></span></p>
                    <p class="status">Status: <span><?= $row["status"] ?></span></p>
                </div>
        <?php
            }
        } else {
            echo "No transactions found.";
        }

        mysqli_close($conn);
        ?>
    </div>

    <div class="histori">
        <h2>Valorant</h2>
        <?php
        include 'Database.php';

        $sql = "SELECT * FROM transaksi_valorant";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div class="histori-item">
                    <p class="transaction-id">ID Transaksi: <?= $row["id"] ?></p>
                    <p class="product-name">Nama: <?= $row["nama"] ?></p>
                    <p class="quantity">Jumlah VP: <span><?= $row["jumlah_vp"] ?></span></p>
                    <p class="price">Harga: <span><?= $row["harga"] ?></span></p>
                    <p class="payment-method">Metode Pembayaran: <span><?= $row["metode_pembayaran"] ?></span></p>
                    <p class="date">Date: <span><?= $row["tgl_pembelian"] ?></span></p>
                    <p class="status">Status: <span><?= $row["status"] ?></span></p>
                </div>
        <?php
            }
        } else {
            echo "No transactions found.";
        }

        mysqli_close($conn);
        ?>
    </div>

    <div class="histori">
        <h2>Genshin</h2>
        <?php
        include 'Database.php';

        $sql = "SELECT * FROM transaksi_genshin";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div class="histori-item">
                    <p class="transaction-id">ID Transaksi: <?= $row["id"] ?></p>
                    <p class="product-name">Nama: <?= $row["nama"] ?></p>
                    <p class="quantity">Jumlah Primo: <span><?= $row["jumlah_primo"] ?></span></p>
                    <p class="price">Harga: <span><?= $row["harga"] ?></span></p>
                    <p class="payment-method">Metode Pembayaran: <span><?= $row["metode_pembayaran"] ?></span></p>
                    <p class="date">Date: <span><?= $row["tgl_pembelian"] ?></span></p>
                    <p class="status">Status: <span><?= $row["status"] ?></span></p>
                </div>
        <?php
            }
        } else {
            echo "No transactions found.";
        }

        mysqli_close($conn);
        ?>
    </div>
    

    <footer>
        &copy; Copyright 2024 ALING
    </footer>

    <script src="script.js"></script>
</body>
</html>

