<?php
include '../koneksi.php';

if(isset($_GET['id_barang'])) {
    header('location: landingpage.php');
}

$id = $_GET['id'];

$sql = "DELETE FROM hero_page WHERE id = '$id'";
$query = mysqli_query($connect, $sql);

if($query){
    header('location: landingpage.php');
}else{
    header('location: delete.php?status=gagal');
}
?>