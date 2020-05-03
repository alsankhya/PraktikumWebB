<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Biodata</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<body>
	<center>
	<h1>Form Mahasiswa</h1>
	<form action="insert.php" method="POST">
	<div class="tabel">
		<table>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input class="input" type="text" name="nim"></input></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input class="input" type="text" name="nama"></input></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea class="input" name="alamat"></textarea></td>
			</tr>
			<tr>
				<td>Nomor Telp Aktif</td>
				<td>:</td>
				<td><input class="input" type="text" name="telp"></input></td>
			</tr>
		
		
		</table>
		
			<button class="buttons" name="kirim">Input</button>
		
			<a href="view.php"><button type="button" class="button">Lihat Data</button></a>
	</div>
	</form>
	</center>
</body>
</html>
