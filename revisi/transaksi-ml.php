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
        #transaksi-ml {
            display: flex;
            width: 100%;
            height: 80vh;
            justify-content: center;
        }
        form {
            width: 50%;
        }
    </style>

    <header>
        <nav class="wrapper">
            <a href="index.php"><h2>LING STORE</h2></a>
            <ul class="navigation">
                <img src="asset/home.svg" alt="">
                <li><a href="index.php">Beranda</a></li>
                <img src="asset/about.svg" alt="">
                <li><a href="tentang.php">Tentang</a></li>
                <img src="asset/chat.svg" alt="">
                <li><a href="https://wa.me/6282117697602">Chat Admin</a></li>
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
    
    <div id="transaksi-ml">
        <form action="transaksi-ml.php" method="post">
            <label for="nama">Nama Pembeli:</label>
            <input style=" border: 1px solid black" type="text" name="nama" id="nama" class="input" required>

            <label for="jumlah_dm">Jumlah Diamond:</label>
            <input style=" border: 1px solid black" type="text" name="jumlah_dm" id="jumlah_dm" class="input" value="<?php echo htmlspecialchars($_GET['jumlah_dm'] ?? ''); ?>" required>

            <label for="harga">Harga:</label>
            <input style=" border: 1px solid black" type="text" name="harga" id="harga" class="input" value="<?php echo htmlspecialchars($_GET['harga'] ?? ''); ?>" required>

            <label for="metode_pembayaran">Metode Pembayaran:</label>
            <select style=" border: 1px solid black" class="input" name="metode_pembayaran" id="metode_pembayaran" required>
                <option value="Dana">Dana</option>
                <option value="ShopeePay">ShopeePay</option>
                <option value="OVO">OVO</option>
            </select>

            <label for="tgl_pembelian">Tanggal Pembelian:</label>
            <input style=" border: 1px solid black" class="input" type="date" name="tgl_pembelian" id="tgl_pembelian" required>

            <button class="btn" name="submit" type="submit">Proses Transaksi</button>
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

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $jumlah_dm = $_POST['jumlah_dm'];
    $harga = $_POST['harga'];
    $metode_pembayaran = $_POST['metode_pembayaran'];
    $tgl_pembelian = $_POST['tgl_pembelian'];
    $status = "BERHASIL"; // Set status to "proses"

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO transaksi_ml (nama, jumlah_dm, harga, metode_pembayaran, tgl_pembelian, status) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $nama, $jumlah_dm, $harga, $metode_pembayaran, $tgl_pembelian, $status);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Transaksi Berhasil');</script>";
        echo "<script>window.location.href = 'proses-tr-ml.php?nama={$nama}&jumlah_dm={$jumlah_dm}&harga={$harga}&metode_pembayaran={$metode_pembayaran}&tgl_pembelian={$tgl_pembelian}&status=Behasil';</script>";
    } else {
        echo "Gagal melakukan transaksi!";
    }

    // Close the statement
    $stmt->close();
    $conn->close();
}
?>
