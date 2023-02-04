<?php 
include 'koneksi.php';

if(isset($id)){
    $id = $_POST['id'];
    $pesan = $_POST['pesan'];
} 
 
mysqli_query($koneksi,"UPDATE list SET pesan = '$pesan' WHERE id = '$id' ");
 
header("location:index.php");
 
?>