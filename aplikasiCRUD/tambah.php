<?php 
require "functions.php";

if (isset($_POST['submit'])){
		if (tambah($_POST) > 0){
			echo "
			<script>
				alert('Sukses!');
				document.location.href = 'index.php';
			</script>
			";
	}else{
		echo "
		<script>
			alert('gagal!');
			document.location.href = 'index.php';
		</script>
		";
	}
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah data Produk</title>
</head>
<body>
	<h1>Tambah Data Produk</h1>
	<form action="" method="post">
		<ul>
			<li>
				<label for="namaProduk">Nama Produk</label>
				<input type="text" name="namaProduk" id="namaProduk">
			</li>
			<li>
				<label for="keterangan">Keterangan</label>
				<input type="text" name="keterangan" id="keterangan">
			</li>
			<li>
				<label for="harga">Harga</label>
				<input type="number" name="harga" id="harga">
			</li>
			<li>
				<label for="jumlah">Jumlah</label>
				<input type="jumlah" name="jumlah" id="jumlah">
			</li>
			<li>
				<button type="submit" name="submit">Tambahkan!</button>
			</li>
		</ul>
	</form>
</body>
</html>