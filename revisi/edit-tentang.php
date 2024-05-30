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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);
    $sql = "UPDATE tentang SET deskripsi='$deskripsi' WHERE id=1"; // Assuming there is only one row with id=1

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

$sql = "SELECT * FROM tentang WHERE id=1"; // Assuming there is only one row with id=1
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);
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
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        /* Form Container Styles */
        #tentang {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f9f9f9;
            padding: 20px;
            box-sizing: border-box;
        }

        .box-tentang {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            text-align: center;
        }

        .box-tentang h2 {
            margin-bottom: 20px;
            color: #crimson;
            font-size: 24px;
        }

        .box-tentang form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .box-tentang form textarea {
            width: 100%;
            height: 150px;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 4px;
            border: 1px solid #ccc;
            font-size: 16px;
            color: #333;
            transition: border-color 0.3s;
            box-sizing: border-box;
        }

        .box-tentang form textarea:focus {
            border-color: #crimson;
            outline: none;
        }

        .box-tentang form input[type="submit"] {
            background-color: crimson;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 16px;
        }

        .box-tentang form input[type="submit"]:hover {
            background-color: red;
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

    <div id="tentang">
        <div class="box-tentang">
        <h2>Edit Deskripsi</h2>
        <form action="edit-tentang.php" method="post">
            <textarea name="deskripsi" rows="10" cols="30"><?php echo $data['deskripsi']; ?></textarea><br>
            <input type="submit" value="Update">
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
mysqli_close($conn);
?>
