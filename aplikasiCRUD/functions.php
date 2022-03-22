<?php 

$connection = mysqli_connect("localhost", "root", "", "pijarcamp");

function query($query){
	global $connection;
	$result = mysqli_query($connection, $query);
	$rows = [];
	while ($data = mysqli_fetch_assoc($result)){
		$rows[] = $data;
	}

	return $rows;
}

function show($query){
	global $connection;
	$result = mysqli_query($connection, $query);
	$data = mysqli_fetch_assoc($result);
	return $data;
}

function tambah($data){
		global $connection;
		$namaProduk = htmlspecialchars($data['namaProduk']);
		$harga = htmlspecialchars($data['harga']);
		$keterangan = htmlspecialchars($data['keterangan']);
		$jumlah = htmlspecialchars($data['jumlah']);
		$query = "INSERT INTO produk VALUES('', '$namaProduk', '$keterangan', '$harga', '$jumlah')";
		mysqli_query($connection, $query);
		return mysqli_affected_rows($connection);
}

function hapus($data){
	global $connection;
	mysqli_query($connection, "DELETE FROM produk WHERE id= $data");
	return mysqli_affected_rows($connection);
}

function ubah($data, $id){
	global $connection;
	$namaProduk= htmlspecialchars($data['namaProduk']);
	$harga = htmlspecialchars($data['harga']);
	$keterangan = htmlspecialchars($data['keterangan']);
	$jumlah = htmlspecialchars($data['jumlah']);
		
	$query = "UPDATE produk SET `nama_produk` = '$namaProduk', `keterangan` = '$keterangan', `harga` = '$harga' , `jumlah` = '$jumlah' WHERE `produk`.`id` = '$id'";
	mysqli_query($connection, $query);
	return mysqli_affected_rows($connection);
}

 ?>
