<?php
session_start();
// Cek apakah session status sudah true
if ($_SESSION['status'] != true) {
    // Jika false, alihkan ke halaman login.php
    header('Location: login.php');
}
?>

<?php
include 'Database.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM data_ml WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $jumlah_dm = $_POST['jumlah_dm'];
    $harga = $_POST['harga'];

    $sql = "UPDATE data_ml SET jumlah_dm='$jumlah_dm', harga='$harga' WHERE id=$id";
    $result = $conn->query($sql);

    if($result){
        echo "<script>alert('Data Berhasil di ubah')</script>";
        echo "<script>window.location='data-ml.php'</script>";
    }else{
        echo "ERROR: ". $conn->error;
    }
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
        #box-edit{
            display:flex;
            width: 100%;
            height: 500px;
            justify-content:center;
            align-items:center;
        }
        form{
            width: 50%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            
        }
        .input-edit{
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border-radius: 5px;
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

    <div id='box-edit'>
        <form action="edit.php?id=<?php echo $id;?>" method="post">
            <label for="jumlah_dm">Jumlah Diamond:</label>
            <input class="input-edit" type="number" id="jumlah_dm" name="jumlah_dm" value="<?php echo $row['jumlah_dm'];?>">
            <br>
            <label for="harga">Harga:</label>
            <input class="input-edit" type="number" id="harga" name="harga" value="<?php echo $row['harga'];?>">
            <br>
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <input class="btn" type="submit" name="submit" value="Edit">
        </form>

    </div>

    <footer>
        &copy; Copyright 2024 ALING
    </footer>

    <script src="script.js"></script>

    
</body>
</html>