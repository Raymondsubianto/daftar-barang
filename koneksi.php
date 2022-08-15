<?php
$host = 'localhost';
$dbname = 'db_barang';
$user = 'root';
$pass = '';

$mysqli = mysqli_connect($host,$user,$pass,$dbname);

if(!$mysqli){
    die("Koneksi Gagal" . mysqli_connect_error());
}
//echo "ok";
?>