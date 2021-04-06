<!--Deklarasi Script PHP-->
<?php
	//Sebagai deklarasi variabel dengan nama var servername, username, password
	$servername = "localhost";
	$username = "root";
	$password = "";

	//Pengecek koneksi ke MySQL
	$conn = mysqli_connect($servername, $username, $password);
	if (!$conn) {
		die("Connection failed : ".mysqli_connect_error());
	}
	
	//Script untuk membuat database
	$sql = "CREATE DATABASE myDB";

	//Mengecek kondisi database berhasil terbuat / gagal
	if (mysqli_query($conn, $sql)) {
		echo "Database created successfully";
	}
	else {
		echo "Error creating database: ".mysqli_error($conn);
	}

	//Script menutup koneksi
	mysqli_close($conn);
?>