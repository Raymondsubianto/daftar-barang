<?php
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($mysqli,"DELETE FROM tb_barang WHERE id='$id'");

header('location:home.php');
?>