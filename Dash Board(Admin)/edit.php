<?php
include '../koneksi.php';
 
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["edit"])){ 
    $id = $_POST["id"];
    $judul = $_POST["judul"];
    $sub_judul = $_POST["sub_judul"];
    error_reporting(0);
 
$msg = "";
 
// If upload button is clicked ...
if (isset($_POST["edit"])) {
 
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "../image/" . $filename;

    // Get all the submitted data from the form
    $sql = "UPDATE hero_page SET gambar='$filename', judul='$judul', sub_judul= '$sub_judul' WHERE id='$id'";
 
    // Execute query
    mysqli_query($connect, $sql);
 
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        header('location: landingpage.php');;
    } else {
        echo "<h3>  Failed to upload image!</h3>";
    }
}
}
?>