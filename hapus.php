<?php 
include_once 'koneksi.php';

$id_produk = $_GET['id_produk'];

$proses_hapus = mysqli_query($kon, "DELETE FROM produk WHERE id_produk = $id_produk");

if ($proses_hapus) {
	header("Location:index.php?hapus=sukses");
}else{
	header("Location:index.php?hapus=gagal");
}