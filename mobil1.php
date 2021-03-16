<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Koneksi</title>
</head>	
<body>
	<h2>akses tabel mobil</h2>
	<?php
	$conn=mysqli_connect("localhost", "root", "alvyano100501") or die ("koneksi gagal");
	mysqli_select_db($conn,"rentalgo");
	$hasil = mysqli_query($conn, "select * from mobil");

	echo "<table border=\"16\">
		<tr>
			<td> plat mobil</td>
			<td>nama mobil </td>
			<td>nama merk </td>
			<td>warna mobil </td>
			<td>stok mobil </td>
			<td>harga mobil </td>
		</tr>";
	while ($row=mysqli_fetch_array($hasil)) {

		echo "<tr>
		 <td>"	.$row[0]."</td>
		 <td>".$row[1]."</td>
		 <td>".$row[2]."</td>
		 <td>".$row[3]."</td>
		 <td>".$row[4]."</td>
		 <td>".$row[5]."</td>
		</tr>";
	}
	echo "</table>";  
	?>
	
	<?php
	$conn=mysqli_connect ("localhost","root", "alvyano100501") or die ("koneksi gagal");
	mysqli_select_db($conn, "rentalgo");
	$id_ = $_POST['id_'];
	$nama_ = $_POST['nama_'];
	$merk_ = $_POST['merk_'];
	$warna_ = $_POST['warna_'];
	$stok_ = $_POST['stok_'];
	$harga_ = $_POST['harga_'];
	$Query = 'INSERT INTO mobil VALUES ("'.$id_.'", "'.$nama_.'", "'.$merk_.'","'.$warna_.'", '.$stok_.', '.$harga_.');'
	$hasil = mysqli_query($conn,$Query);
	?>
</body>
</html>