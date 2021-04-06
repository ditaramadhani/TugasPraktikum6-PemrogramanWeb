<!--Deklarasi Script PHP-->
<?php
	//Script untuk penghubung/pembuka koneksi ke MySQL
	$conn = mysqli_connect("localhost","root","","mysql");

	//untuk mengecek koneksi ke MySQL
	if (mysqli_connect_error()) {
		echo "Failed to connect to MySQL ".mysqli_connect_error();
		exit();
	} else {
		echo "Sudah Connect ke MySQL"."<br>";
	}
?>
<?php  
?>