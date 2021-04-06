<!--Deklarasi script PHP-->
<?php
	//Pembuka koneksi ke MySQL
	$conn = mysqli_connect("localhost","root","","mysql");
	//Pengecek koneksi
	if (mysqli_connect_error()) {
		echo "Failed to connect to MySQL ".mysqli_connect_error();
		exit();
	} else {
		echo "Connected to MySQL"."<br>";
	}
	
	//Sebagai deklarasi variabel dengan nama var servername, username, password, dan dbname
	$servername ="localhost";
	$username = "root";
	$password = "";
	$dbname = "DB_tamu";

	//Pembuka koneksi ke database 
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	//Pengecek koneksi
	if (!$conn) {
		die("Connection failed: ".mysqli_connect_error()."<br>");
	}else{
		echo "Sudah Connect ke Database".$dbname."<br>";
	}
?>