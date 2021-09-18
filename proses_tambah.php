<?php 
include_once 'koneksi.php';
if (isset($_POST['tambah_data'])) {
	$nama_produk = $_POST['nama_produk'];
	$harga_produk = $_POST['harga_produk'];
	$stok_produk = $_POST['stok_produk'];

	$proses_tambah = mysqli_query($kon, "INSERT INTO produk (nama_produk, harga_produk, stok_produk) VALUES ('$nama_produk', $harga_produk, $stok_produk);");

	if ($proses_tambah) {
		header('Location:tambah.php?status=sukses');
	}else{
		header('Location:tambah.php?status=gagal');
	}
}
