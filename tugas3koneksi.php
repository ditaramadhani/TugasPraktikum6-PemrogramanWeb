<!--Deklarasi Script PHP-->
<?php
	//Script untuk penghubung/pembuka koneksi ke MySQL
	$conn = mysqli_connect("localhost","root","","mysql");

	//Untuk mengecek koneksi ke MySQL
	if (mysqli_connect_error()) {
		echo "Failed to connect to MySQL ".mysqli_connect_error();
		exit();
	} else {
		echo "Sudah Connect ke MySQL"."<br>";
	}

	//Deklarasi variabel dengan nama var servername, username, password, dan dbname
		$servername ="localhost";
		$username = "root";
		$password = "";
		$dbname = "pegawai";
		
		//Pembuka koneksi ke database
		$conn = mysqli_connect($servername,$username,$password,$dbname);
		//Pengecek koneksi
		if (!$conn) {
			die("Connection failed: ".mysqli_connect_error());
		}else{
			echo "Sudah Connect ke Database ".$dbname."<br>";
		}
?>
