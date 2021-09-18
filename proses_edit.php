<?php 
include_once 'koneksi.php';
if (isset($_POST['edit_data'])) {
	$id_produk = $_POST['id_produk'];
	$nama_produk = $_POST['nama_produk'];
	$harga_produk = $_POST['harga_produk'];
	$stok_produk = $_POST['stok_produk'];

	$proses_tambah = mysqli_query($kon, "UPDATE produk SET nama_produk = '$nama_produk', harga_produk = $harga_produk, stok_produk = $stok_produk WHERE id_produk = $id_produk;");

	if ($proses_tambah) {
		header("Location:edit.php?id_produk=$id_produk&status=sukses");
	}else{
		header("Location:edit.php?id_produk=$id_produk&status=gagal");
	}
}
