<?php
// koneksi ke database
$host = 'localhost';
$username = 'root';
$password = '';
$db = 'todo';

$koneksi = mysqli_connect($host, $username, $password, $db);

if($koneksi === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// query
function query($query){
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

?>