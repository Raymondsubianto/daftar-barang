<?php
include 'koneksi.php';
$id        =$_GET['id'];
$barang    =$_POST['barang'];
$hargaBeli =$_POST['harga_beli'];
$hargaJual =$_POST['harga_jual'];

$query = mysqli_query($mysqli,"UPDATE tb_barang SET barang='$barang',harga_beli='$hargaBeli',harga_jual='$hargaJual' WHERE id=$id");

header('location:home.php');
?>
