<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form input mobil</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h2>Form input mobil</h2>
	<form action="mobil1.php" method="post">
	<table>
		<tr><td>plat nomor : </td><td><input type="text" name="id_" size="35" ></td></tr>
		<tr><td>nama mobil : </td><td><input type="text" name="nama_" size="35"></td></tr>
		<tr><td>merk mobil : </td><td><input type="text" name="merk_" size="35"></td></tr>
		<tr><td>warna mobil : </td><td><input type="text" name="warna_" size="35"></td></tr>
		<tr><td>stok mobil : </td><td><input type="text" name="stok_" size="35"></td></tr>
		<tr><td>harga perhari  : </td><td><input type="text" name="harga_" size="35"></td></tr>
		<tr><td></td><td><input type="submit" value="simpan">
	</form>
	<form method="get" action="mobil.php">
    		<button type="mobil">tampilkan mobil</button>
	</form><br>
</body>
</html>