<?php
include 'koneksi.php';
$query = mysqli_query($mysqli,"INSERT INTO tb_barang (`id`,`barang`,`harga_beli`,`harga_jual`) 
VALUES('','','','')");

header('location:home.php');
?>
