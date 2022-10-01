<?php
include '../koneksi.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="index.css?<?php echo time(); ?>" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    
    <div class="navbar">

        <p class="brand-title">Rolex</p>
        <a href="index.ph"><p class="actived" class="home">HOME</p></a>
        <a href="#"><p class="best">Best Seller</p></a>
        <a href="../menwatchlist/index.php"><p class="men">Men</p></a>
        <a href="../women-watch/index.php"><p class="women">Women</p></a>

    </div>

    <div class="hero">

    <?php
        $query = "SELECT * from hero_page WHERE id ='1'";
        $result = mysqli_query($connect, $query);
 
        while ($data = mysqli_fetch_assoc($result)) {
        ?>  
        <div class="hero-img">
            <img src="../image/<?php echo $data['gambar']; ?>">
        </div>
        <div class="hero-text">
            <p><?php echo $data['judul']; ?></p>
            <p><?php echo $data['sub_judul']; ?></p>
        </div>
        
    <?php
        }
    ?>
    </div>

   <div class="news-page">
        
    <div class="news">
    <?php
        $query = "SELECT * from hero_page WHERE id='2'";
        $result = mysqli_query($connect, $query);
 
        while ($data = mysqli_fetch_assoc($result)) {
        ?>
        <div class="card-text">
        <p><?php echo $data['judul']; ?></p>
        <p><?php echo $data['sub_judul']; ?></p>
        </div>
        <div class="news-image">
            <img src="../image/<?php echo $data['gambar']; ?>">
        </div>
    <?php
    }
    ?>
    </div>

    <div class="trending">
    <?php
        $query = "SELECT * from hero_page WHERE id ='3'";
        $result = mysqli_query($connect, $query);
 
        while ($data = mysqli_fetch_assoc($result)) {
        ?>
        <div class="card-text">
        <p><?php echo $data['judul']; ?></p>
        <p><?php echo $data['sub_judul']; ?></p>
        </div>
        <div class="trending-image">
            <img src="../image/<?php echo $data['gambar']; ?>">
        </div>
   <?php
    }
    ?>
    </div>

   </div>

   <div class="footer">
        <p class="footer-title">ROLEX</p>
        <div class="contact">
            <ul class="footer1">
                <a href=""><li><i class="fa-brands fa-facebook-f"></i></li></a>
                <a href=""><li><i class="fa-brands fa-twitter"></i></li></a>
                <a href=""><li><i class="fa-brands fa-instagram"></i></li></a>
                <a href=""><li><i class="fa-regular fa-envelope"></i></li></a>
            </ul>
        </div>
       </div>
    </div>

</body>
</html>