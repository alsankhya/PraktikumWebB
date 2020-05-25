<?php
    session_start();
    if(empty($_SESSION['id'])){
        header('location:index.php');
    }elseif($_SESSION['role']==0){
        header('location:beranda-a.php');
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
				<li><a href="beranda-p.php">Beranda</a></li>
				<li><a href="#">Tentang</a></li>
				<li><a href="#">Galeri Buku</a></li>
				<li><a href="#">Kontak</a></li>
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
				<h3>Selamat Datang</h3>
				<p>Website ini adalah untuk Perpustakaan Jimbaran. Silahkan untuk mencari buku yang Anda cari.<br>
				Saya ucapkan terima kasih atas kunjungan anda ke website profil dari perpustakaan pada Universitas Jimbaran. Silahkan kunjungi bagian masing - masing untuk mengetahui informasi lebih lanjut.</p>
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
				Peminjaman dapat dilakukan di hari kerja Senin - Jumat, pukul 08.00 - 16. 00 WITA.<br><br>
				Narahubung dapat dilihat pada "Kontak" di navigasi diatas.
				</p>
			</div>
			<div class="konten">
				<h3>Kontak</h3>
				<strong>Perpustakaan</strong>
				<table border="0">
					<tr>
						<td>Telpon</td>
						<td>:</td>
						<td>0336-98765432</td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td>Jl. Raya Kampus Unud no. 69</td>
					</tr>
					<tr>
						<td>Email</td>
						<td>:</td>
						<td>perpusjimbar2020@gmail.com</td>
					</tr>
				</table>
				<br>
				<strong>Admin</strong>
				<table border="0">
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td>Gek Adis</td>
					</tr>
					<tr>
						<td>HP/Whatsapp</td>
						<td>:</td>
						<td>082233445678</td>
					</tr>
					<tr>
						<td>Email</td>
						<td>:</td>
						<td>adisluhsankhya@gmail.com</td>
					</tr>
				</table>
			</div>
			<div class="konten">
				<h3>Saran/Komentar</h3>
				<textarea name="" rows="5" cols="70" required/></textarea><br>
				<input style="background-color: lightgray;" type="submit" name="submit" Value="Submit">
			</div>
		</div>
	</div>
	<footer>
		© Hak Cipta 2020 - alsankhya
	</footer>
</body>
</html>