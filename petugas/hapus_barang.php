<?php
include_once("../conn/koneksi.php");

$id = $_GET['id_produk'];

$result = mysqli_query($koneksi, "DELETE FROM produk WHERE id_produk=$id");

header("location:index.php?page=stok");
?>