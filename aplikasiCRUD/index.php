<?php 
require 'functions.php';

if (isset($_GET['submit'])){
	$data = $_GET['search'];
	$produk = query("SELECT * FROM produk 
		WHERE nama_produk LIKE '%$data%' OR
		keterangan LIKE '%$data%' OR
		harga LIKE '%$data%' OR
		Jumlah LIKE '%$data%'
		");
} else {
	$produk = query('SELECT * FROM produk');
}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>CRUD aplikasi pijarCamp</title>
 </head>
 <body>
 	<h1>Daftar Produk pijarCamp</h1>
 	<a href="tambah.php">Tambah data produk</a>
 	<form action="" method="get">
 		<input type="text" name="search" placeholder="cari disini..." autofocus>
 		<button type="submit" name="submit">Search!</button>
 	</form>

 	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<td>No.</td>
			<td>Aksi</td>
			<td>Nama Produk</td>
			<td>Keterangan</td>
			<td>Harga</td>
			<td>Jumlah barang</td>
		</tr>
		<?php
		$nomor = 1;  
		foreach ($produk as $data) { 
			?>
		
		<tr>
			<td><?php echo $nomor; ?></td>
			<td> 
				<a href="ubah.php?id=<?= $data['id'] ?>">Update</a>
				<a href="hapus.php?id=<?= $data['id'] ?>">Delete</a>
			</td>
			<td><?php echo $data["nama_produk"]; ?></td>
			<td><?php echo $data["keterangan"]; ?></td>
			<td><?php echo $data["harga"]; ?></td>
			<td><?php echo $data["jumlah"]; ?></td>
		</tr>

		<?php $nomor += 1; } ?>
		
	</table>
 
 </body>
 </html>