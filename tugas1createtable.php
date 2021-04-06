<!--Deklarasi script PHP-->
<?php
	//Script query untuk buat table
	$sql = "CREATE TABLE buku_tamu (
	ID_BT INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	NAMA VARCHAR(200) NOT NULL,
	ALAMAT VARCHAR(50) NOT NULL,
	TIPETAMU VARCHAR(5),
	TELP VARCHAR(20))";

	//Script mengecek tabel berhasil dibuat / gagal 
	if (mysqli_query($conn, $sql)) {
		echo "Tabel buku tamu berhasil dibuat";
	} else {
		echo "Error: ".$sql."<br>".mysqli_error($conn);
	}
		
?>