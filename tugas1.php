<!DOCTYPE html>
<html>
<head>
	<title>Database Tamu Pengunjung</title>
</head>
<body>
	<!--Menampilkan teks dengan format Heading 1-->
	<h1> TUGAS 1 </h1>
	<?php
		//Script memanggil file koneksi tugas1koneksi.php
		include "tugas1koneksi.php";
		//Script memanggil file create tabel tugas1buattabel.php
		include "tugas1createtable.php";
		//Script memanggil file insert tugas1insert.php
		include "tugas1insert.php";
		//Script menutup koneksi
		mysqli_close($conn);
	?>
</body>
</html>