<!--Deklarasi Script PHP-->
<?php  
	//Sebagai deklarasi variabel dengan nama var servername, username, password, dan dbname
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "myDB";

	//Pembuka koneksi ke MySQL
	$conn = mysqli_connect($servername,$username,$password,$dbname);
	//Pengecek koneksi
	if (!$conn) {
		die("Connection failed : ".mysqli_connect_error());
	}

	//Script query pembuat tabel
	$sql = "CREATE TABLE liga (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	kode VARCHAR(3) NOT NULL,
	negara VARCHAR(30) NOT NULL,
	champion int(3))";

	//Mengecek kondisi tabel berhasil terbuat / gagal
	if (mysqli_query($conn, $sql)) {
		echo "Table created successfully";
	}
	else {
		echo "Error : ".$sql."<br>".mysqli_error($conn);
	}
	
	//Script menutup koneksi
	mysqli_close($conn);
?>