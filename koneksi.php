<!DOCTYPE html>
<html>
<head>
	<title>Koneksi Database MySQL</title>
</head>
<body>
	<h1>Demo Koneksi database MySQL</h1>
	<?php  
	//Script untuk penghubung/pembuka koneksi ke MySQL
	$conn = mysqli_connect("localhost","root","","mysql");

	//Untuk Cek Koneksi
	if (mysqli_connect_error()) {
		echo "Failed to connect to MySQL".mysqli_connect_error();
		exit();
	}
	else{
		echo "Berhasil Connect";
	}
	?>
</body>
</html>