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

    <div class="main-diamond">
            <?php
                include 'Database.php';
                $sql = "SELECT * FROM data_ml";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()){
                    echo "<a href='transaksi-ml.php?id={$row['id']}&jumlah_dm={$row['jumlah_dm']}&harga={$row['harga']}'>";
                    echo "<div class='box-diamond'>";
                    echo "<figcaption>". $row['jumlah_dm']. " Diamond</figcaption>";
                    echo "<img src='asset/MLBB_Diamonds.png' alt=''>";
                    echo "<figcaption style='color:red'>Rp. ". $row['harga']. "</figcaption>";
                    echo "</div>";
                    echo "</a>";
                }
            ?>
    </div>
 

    <footer>
        &copy; Copyright 2024 ALING
    </footer>

    <script src="script.js"></script>

    
</body>
</html>