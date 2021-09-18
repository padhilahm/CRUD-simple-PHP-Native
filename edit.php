<?php 
include_once 'koneksi.php';
if (!isset($_GET['id_produk'])) {
	header("Location:index.php");
}
$id_produk = $_GET['id_produk'];
$data_edit = mysqli_query($kon, "SELECT * FROM produk WHERE id_produk = $id_produk;")->fetch_row();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Edit Data</title>
</head>
<body>
	<?php 
	if (isset($_GET['status'])) {
		if ($_GET['status'] == 'sukses') {
			echo "Data berhasil di edit<br>";
		}else{
			echo "Data gagal di edit<br>";
		}
	}
	?>
	<a href="index.php">Kembali</a>
	<form action="proses_edit.php" method="POST">
		<input type="hidden" name="id_produk" value="<?= $id_produk; ?>">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama_produk" value="<?= $data_edit[1]; ?>" required></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="number" name="harga_produk" value="<?= $data_edit[2]; ?>" required></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td><input type="number" name="stok_produk" value="<?= $data_edit[3]; ?>" required></td>
			</tr>
			<tr>
				<td><input type="submit" name="edit_data" value="Edit"></td>
			</tr>
		</table>
		
	</form>

</body>
</html>