<?php
include '../koneksi.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Men's watch list</title>

    <link rel="stylesheet" type="text/css" href="index.css?<?php echo time(); ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    
    <div class="navbar">

        <p class="brand-title">ROLEX</p>
        <a href="../Landing Page/index.php"><p class="home">HOME</p></a>
        <a href="../bestsellerpage/bestsell.html"><p class="best">Best Seller</p></a>
        <a href="index.php"><p class="actived" class="men">Men</p></a>
        <a href="../women-watch/index.php"><p class="women">Women</p></a>

    </div>

    <div class="content">
        <p class="page-title">Men's Watch list</p>

        <div class="watch-list">
            <table>
                <tr>
                    <td>
                        <?php
                        $query = " SELECT * FROM men_watch WHERE id='1'";
                        $result = mysqli_query($connect, $query);
 
                        while ($data = mysqli_fetch_assoc($result)) {
                        ?>
                            <a href=""><div class="watch">
                                <img src="../image/<?php echo $data['gambar']; ?>">
                            </div></a>
                            <p><?php echo $data['nama']; ?></p>
                            <p ><?php echo $data['harga']; ?></p>
                        <?php
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        $query = " SELECT * FROM men_watch WHERE id='2'";
                        $result = mysqli_query($connect, $query);
                        
                        while ($data = mysqli_fetch_assoc($result)) {
                        ?>
                            <a href=""><div class="watch">
                                <img src="../image/<?php echo $data['gambar']; ?>">
                            </div></a>
                            <p><?php echo $data['nama']; ?></p>
                            <p ><?php echo $data['harga']; ?></p>
                        <?php
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        $query = " SELECT * FROM men_watch WHERE id='3'";
                        $result = mysqli_query($connect, $query);
 
                        while ($data = mysqli_fetch_assoc($result)) {
                        ?>
                            <a href=""><div class="watch">
                                <img src="../image/<?php echo $data['gambar']; ?>">
                            </div></a>
                            <p><?php echo $data['nama']; ?></p>
                            <p ><?php echo $data['harga']; ?></p>
                            <?php
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                        $query = " SELECT * FROM men_watch WHERE id='4'";
                        $result = mysqli_query($connect, $query);
 
                        while ($data = mysqli_fetch_assoc($result)) {
                        ?>
                            <a href=""><div class="watch">
                                <img src="../image/<?php echo $data['gambar']; ?>">
                            </div></a>
                            <p><?php echo $data['nama']; ?></p>
                            <p ><?php echo $data['harga']; ?></p>
                        <?php
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        $query = " SELECT * FROM men_watch WHERE id='5'";
                        $result = mysqli_query($connect, $query);
                        
                        while ($data = mysqli_fetch_assoc($result)) {
                        ?>
                            <a href=""><div class="watch">
                                <img src="../image/<?php echo $data['gambar']; ?>">
                            </div></a>
                            <p><?php echo $data['nama']; ?></p>
                            <p ><?php echo $data['harga']; ?></p>
                        <?php
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        $query = " SELECT * FROM men_watch WHERE id='6'";
                        $result = mysqli_query($connect, $query);
 
                        while ($data = mysqli_fetch_assoc($result)) {
                        ?>
                            <a href=""><div class="watch">
                                <img src="../image/<?php echo $data['gambar']; ?>">
                            </div></a>
                            <p><?php echo $data['nama']; ?></p>
                            <p ><?php echo $data['harga']; ?></p>
                            <?php
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php
                        $query = " SELECT * FROM men_watch WHERE id='7'";
                        $result = mysqli_query($connect, $query);
 
                        while ($data = mysqli_fetch_assoc($result)) {
                        ?>
                            <a href=""><div class="watch">
                                <img src="../image/<?php echo $data['gambar']; ?>">
                            </div></a>
                            <p><?php echo $data['nama']; ?></p>
                            <p ><?php echo $data['harga']; ?></p>
                        <?php
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        $query = " SELECT * FROM men_watch WHERE id='8'";
                        $result = mysqli_query($connect, $query);
                        
                        while ($data = mysqli_fetch_assoc($result)) {
                        ?>
                            <a href=""><div class="watch">
                                <img src="../image/<?php echo $data['gambar']; ?>">
                            </div></a>
                            <p><?php echo $data['nama']; ?></p>
                            <p ><?php echo $data['harga']; ?></p>
                        <?php
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        $query = " SELECT * FROM men_watch WHERE id='9'";
                        $result = mysqli_query($connect, $query);
 
                        while ($data = mysqli_fetch_assoc($result)) {
                        ?>
                            <a href=""><div class="watch">
                                <img src="../image/<?php echo $data['gambar']; ?>">
                            </div></a>
                            <p><?php echo $data['nama']; ?></p>
                            <p ><?php echo $data['harga']; ?></p>
                            <?php
                        }
                        ?>
                    </td>
                </tr>
            </table>
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