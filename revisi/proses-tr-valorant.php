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
        #proses-tr {
            display: flex;
            width: 100%;
            min-height: 80vh;
            justify-content: center;
            align-items: center;
        }
        .container{
            width: 300px;
            height: auto;
            background-color: whitesmoke;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .container h3{
            text-align: center;
            margin-bottom: 20px;
        }
        .box-tr {
            margin-top: 10px;
            width: 100%;
        }
        .box-tr p {
            margin: 10px 0;
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
            <div class="iklan1"> <img src="asset/poster_pubg2.jpeg"> </div>
            <div class="iklan2">
                <div class="iklan21"> <img src="asset/poster_ML.webp" alt=""> </div>
                <div class="iklan22"> <img src="asset/poster_valorant.jpg" alt=""> </div>
            </div>
        </div>
    </section>

    <div id="proses-tr">
    <div class="container">
        <h3>LING STORE</h3>
        <p>===========================</p>
        <p>Nama : <?php echo $_GET['nama'];?></p>
        <p>Jumlah VP : <?php echo $_GET['jumlah_vp'];?></p>
        <p>Harga : Rp. <?php echo $_GET['harga'];?></p>
        <p>Metode Pembayaran : <?php echo $_GET['metode_pembayaran'];?></p>
        <p>Tanggal Pembelian : <?php echo $_GET['tgl_pembelian'];?></p>
        <p>Status : <?php echo $_GET['status'];?></p>
        <p>===========================</p>
    </div>
</div>
    
    <footer>
        &copy; Copyright 2024 ALING
    </footer>

    <script src="script.js"></script>
</body>
</html>
