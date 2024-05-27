<?php
include 'Database.php';

$sql = "SELECT * FROM data_ml";
$result = $conn->query($sql);
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
        <button type="submit" class="btn"><a href="tambah.php">Tambah</a></button>
        <table>
            <tr>
                <th >No</th>
                <th>Jumlah Diamond</th>
                <th>Harga</th>
                <th style="width:200px">Aksi</th>
            </tr>
            <?php
            if($result && $result->num_rows > 0)
            {
                while($row = $result->fetch_assoc()){
                    echo "<tr> 
                    <td>". $row["id"] ."</td>
                    <td>". $row["jumlah_dm"] . "</td>
                    <td>Rp. ". $row["harga"] . "</td>
                    <td><a href='edit.php?id=" .$row['id']."' >Edit</a> || <a href='delete.php?id=" .$row['id']."' >Delete</a>
                    </tr>";
                }
            }else{
                echo "<tr><td colspan='4'>Tidak Ada Data</td></tr>";
            }
            ?>


        </table>
        

    </div>

    <footer>
        &copy; Copyright 2024 ALING
    </footer>

    <script src="script.js"></script>

    
</body>
</html>

