<?php 

include 'koneksi.php';

$pesan = $_POST['list'];

mysqli_query($koneksi,"INSERT INTO list VALUES('','$pesan')");
 
header("location:index.php");
 