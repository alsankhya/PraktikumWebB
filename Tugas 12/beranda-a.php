<?php
    session_start();
    if(empty($_SESSION['id'])){
        header('location:index.php');
    }elseif($_SESSION['role']==1){
        header('location:beranda-p.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Website Perpustakaan</title>
	<link rel="stylesheet" href="index.css">
</head>
<body>
	<div class="main">
		<div class="banner">
			<h2>Website Perpustakaan</h2>
		</div>
		<nav class="navigasi">
			<ul>
				<li><a href="beranda-a.php">Beranda</a></li>
				<li><a href="#">Tentang</a></li>
				<li><a href="#">Galeri Buku</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
		<div class="menu-kiri">
			<div class="konten">
				<img src="gambar/logo.png" width="230px">
				<h3>Jadwal Buka</h3>
                <img src="gambar/buku.jpg" width="230px">
                <p style="text-align: center;">Senin-Jumat</p>
				<p style="text-align: center;">08.00 WITA - 16.00 WITA</p>
			</div>
			<div class="konten">
				<h3>Buku Terpopuler</h3>
				<nav class="terpopuler">
	            	<ul>
	                	<li><a href="#">Teknologi</a></li>
	                    <li><a href="#">Hukum</a></li>
	                    <li><a href="#">Sejarah</a></li>
	                    <li><a href="#">Fiksi</a></li>
	                </ul>
	         	</nav>
	         </div>
		</div>
		<div class="menu-utama">
			<div class="konten">
				<h3>SELAMAT DATANG ADMIN</h3>
				<p>Website ini adalah untuk Perpustakaan Jimbaran. Silahkan untuk mencari buku yang Anda cari. Semoga ada.</p>
			</div>
			<div class="konten">
				<h3>Galeri Buku</h3>
				<table border="0" style="border-collapse: collapse" width="100%" cellpadding="8" bordercolor="black">
					<tr>
						<td><img src="gambar/buku1.jfif"></td>
						<td><img src="gambar/buku5.jpg"></td>
						<td><img src="gambar/buku7.jfif"></td>
						<td><img src="gambar/buku11.jpg"></td>
						<td><img src="gambar/buku2.jfif"></td>
					</tr>
					<tr>
						<td><a href="#">Sherlock Holmes A Study In Scarlet</a></td>
						<td><a href="#">Ke Mana Larinya Harta Bersama Setelah Perceraian?</a></td>
						<td><a href="#">Seri Hukum Hak Kekayaan Intelektual Hukum Paten Edisi Revisi</a></td>
						<td><a href="#">Sejarah Lengkap Dunia Abad Pertengahan 500-1400 M</a></td>
						<td><a href="#">Sherlock Holmes The Sign of The Four</a></td>
					</tr>
				</table>
			</div>
			<div class="konten">
				<h3>Tentang</h3>
				<p>Website ini dibentuk pada tanggal 1 April 2020, digunakan untuk mencari buku yang tersedia di Perpustakaan Jimbaran. Alasan website perpustakaan ini dibuat adalah untuk memudahkan pengguna mencari ketersediaan buku. Terdapat ±100 buku di database perpustakaan ini dari berbagai macam kategori tersedia. <br><br>
				Peminjaman dapat dilakukan di hari kerja Senin - Jumat, pukul 08.00 - 16. 00 WITA.
				</p>
			</div>
		</div>
	</div>
	<footer>
		© Hak Cipta 2020 - alsankhya
	</footer>
</body>
</html>