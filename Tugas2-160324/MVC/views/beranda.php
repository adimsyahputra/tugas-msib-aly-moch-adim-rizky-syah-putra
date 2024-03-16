<?php 
session_start();
include 'koneksi.php';


 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-widht, initial-scale=1">
	<title>PSB Online Administrator</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<body>

<!--bagian header-->
<header>
	<h1><a href="beranda.php">Admin PSB</a> </h1>
	<ul>
		<li><a href="beranda.php">Beranda</a></li>
		<li><a href="data_peserta.php">Data Peserta</a></li>
		<li><a href="keluar.php">Keluar</a></li>
	</ul>
</header>

<!--Konten-->
<section class="content">
	<h2>Beranda</h2>
	<div class="box">
		<h3><?php echo $_SESSION['nama'] ?>, Selamat datang di PSB Online.</h3>
		
	</div>
</section>

</body>
</html>