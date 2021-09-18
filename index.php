<?php 
include_once 'koneksi.php';

$tampil_data = mysqli_query($kon, "SELECT * FROM produk");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Untama Produk</title>
</head>
<body>
	<?php 
	if (isset($_GET['hapus'])) {
		if ($_GET['hapus'] == 'sukses') {
			echo "Berhasil di hapus<br>";
		}else{
			echo "Gagal di hapus<br>";
		}
	}

	 ?>

	<a href="tambah.php">Tambah Data</a>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama Produk</th>
			<th>Harga</th>
			<th>Stok</th>
			<th>Aksi</th>
		</tr>
		
		<?php 
		$no = 1;
		foreach ($tampil_data as $data) {
			?>
			<tr>
				<td><?= $no; ?></td>
				<td><?= $data['nama_produk']; ?></td>
				<td><?= $data['harga_produk']; ?></td>
				<td><?= $data['stok_produk']; ?></td>
				<td><a href="edit.php?id_produk=<?= $data['id_produk']; ?>">Edit</a> | <a href="hapus.php?id_produk=<?= $data['id_produk']; ?>" onclick="javascript: return confirm('Anda yakin hapus ?')">Hapus</a></td>
			</tr>
		<?php $no++; } ?>

	</table>

</body>
</html>