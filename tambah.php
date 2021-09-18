<!DOCTYPE html>
<html>
<head>
	<title>Halaman Tambah Data</title>
</head>
<body>
	<?php 
	if (isset($_GET['status'])) {
		if ($_GET['status'] == 'sukses') {
			echo "Data berhasil ditambahkan<br>";
		}else{
			echo "Data gagal ditambahkan<br>";
		}
	}

	 ?>
	<a href="index.php">Kembali</a>
	<form action="proses_tambah.php" method="POST">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama_produk" required></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="number" name="harga_produk" required></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td><input type="number" name="stok_produk" required></td>
			</tr>
			<tr>
				<td><input type="submit" name="tambah_data" value="Tambah"></td>
			</tr>
		</table>
		
	</form>

</body>
</html>