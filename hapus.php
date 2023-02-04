<?php 
include 'koneksi.php';
 
$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM list");

header("location:index.php");
 
?>