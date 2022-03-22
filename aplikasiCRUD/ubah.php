<?php 
require 'functions.php';

$id = $_GET['id'];
$produk = show("SELECT * FROM produk WHERE id ='$id'");
if (isset($_POST['submit'])){
	if (ubah($_POST, $id)){
		echo "
	<script type='text/javascript'>
	 	alert('Data sukses diubah!');
	 	document.location.href = 'index.php';
	</script>
	";
	}else{
		echo "
		<script>
		 	alert('Data gagal diubah!');
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
	<title>Ubah data Produk</title>
</head>
<body>
	<h1>Ubah Data Produk</h1>
	<form action="" method="post">
		<ul>
			<li>
				<label for="namaProduk">Nama Produk</label>
				<input type="text" name="namaProduk" id="namaProduk"  value="<?php echo $produk["nama_produk"]; ?>">

			</li>
			<li>
				<label for="keterangan">Keterangan</label>
				<input type="text" name="keterangan" id="keterangan" value="<?php echo $produk["keterangan"]; ?>">

			</li>
			<li>
				<label for="harga">Harga</label>
				<input type="number" name="harga" id="harga" value="<?php echo $produk["harga"]; ?>">

			</li>
			<li>
				<label for="jumlah">Jumlah</label>
				<input type="number" name="jumlah" id="jumlah" value="<?php echo $produk["jumlah"]; ?>">

			</li>
			<li>
				<button type="submit" name="submit">Ubah!</button>
			</li>
		</ul>
	</form>
</body>
</html>