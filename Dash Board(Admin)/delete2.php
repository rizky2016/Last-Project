<?php
include '../koneksi.php';

if(isset($_GET['id'])) {
    header('location: landingpage.php');
}

$id = $_GET['id'];

$sql = "DELETE FROM women_watch WHERE id = '$id'";
$query = mysqli_query($connect, $sql);

if($query){
    header('location: womenwatch.php');
}else{
    header('location: delete.php?status=gagal');
}
?>