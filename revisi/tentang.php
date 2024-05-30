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
        #container{
            display: flex;
            width: 100%;
            height: 100vh;
        }
        .tentang-kiri{
            display: flex;
            width: 50%;
            height: 500px;
            color: black;  
            justify-content: center;
            align-items: center;
        }
        .box-tentang{
            width: 50%;
            height: 50%;
            font-size: 20px;
        }
        .tentang-kanan{
            width: 50%;
            height: 500px;
        }

        #wallpaper-tentang{
            width: 100%;
            height: 80vh;
        }

        #wallpaper-tentang p{
            background-image: url("asset/valorant_wall.jpg");
            background-repeat: repeat;
            margin-top: 70px;
            margin-bottom: 200px;
            font-size: 120px;
            text-align: center;
            font-weight: bold;
            text-transform: uppercase;
            font-family: 'Steelfish Rg', 'helvetica neue', 
                                    helvetica, arial, sans-serif;
            font-weight: 800;
            -webkit-font-smoothing: antialiased;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: wallpaper-animation 10s infinite;
        }
        @keyframes wallpaper-animation {
            0% {
            transform: scale(1);
            }
            50% {
            transform: scale(1.1);
            }
            100% {
            transform: scale(1);
            }
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

    <div id="container">
        <div class="tentang-kiri">
            <div class="box-tentang">
            <h2>LING STORE</h2>
            <br>
            <?php
                include 'Database.php'; 

                $sql = "SELECT * FROM tentang"; 
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<p><span>" . $row['deskripsi'] . "</span></p>";
                    }
                } else {
                    echo "Error: " . mysqli_error($conn);
                }
                mysqli_close($conn);
                ?>

            </div>
        </div>
        <div class="tentang-kanan">
                <div id="wallpaper-tentang">
                    <p>LING STORE</p>
                </div>
        </div>

    </div>

    <footer>
        &copy; Copyright 2024 ALING
    </footer>

    <script src="script.js"></script>

    
</body>
</html> 

