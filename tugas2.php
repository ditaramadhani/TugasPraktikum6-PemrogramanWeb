<!DOCTYPE html>
<html>
<head>
	<title> MEMBUAT DATABASE PEGAWAI </title>
</head>
<body>
	<!--Menampilkan teks dengan format Heading 1-->
	<h1> MEMBUAT DATABASE PEGAWAI PT TADIKA MESRA </h1>
	<?php 
		include "tugas2koneksi.php";
		
		// Script untuk membuat database
		$sql = "CREATE DATABASE pegawai";
		
		//Untuk mengecek database berhasil terbuat / gagal 
		if (mysqli_query($conn, $sql)) {
			echo "Berhasil membuat database pegawai"."<br>";
		} else {
			echo "Error creating database: ".mysqli_error($conn);
		}
		mysqli_close($conn);

		//Sebagai deklarasi variabel dengan nama var servername, username, password, dan dbname
		$servername ="localhost";
		$username = "root";
		$password = "";
		$dbname = "pegawai";

		//Script untuk penghubung/pembuka koneksi ke database
		$conn = mysqli_connect($servername,$username,$password,$dbname);
		if (!$conn) {
			die("Connection failed: ".mysqli_connect_error());
		}else{
			echo "Sudah Connect ke Database ".$dbname."<br>";
		}
		
		//Script query membuat tabel relasi
		$sql="CREATE TABLE BIDANG_KERJA(
   			KODE_BIDANG varchar(5) not null  comment '',
   			NAMA_BIDANG varchar(50)  comment '',
   			primary key (KODE_BIDANG))";
   		mysqli_query($conn,$sql);
		
		$sql="CREATE TABLE PEGAWAI(
   			KODE_PEGAWAI varchar(5) not null  comment '',
   			KODE_BIDANG  varchar(5)  comment '',
   			NAMA_PEGAWAI varchar(50)  comment '',
   			ALAMAT_PEGAWAI varchar(50)  comment '',
   			primary key (KODE_PEGAWAI))";
   		mysqli_query($conn,$sql);
		
		//Script untuk alter data 
		$sql="ALTER TABLE PEGAWAI ADD constraint FK_PEGAWAI_BEKERJA_BIDANG_K foreign key (KODE_BIDANG)
      references BIDANG_KERJA (KODE_BIDANG) on delete restrict on update restrict";
		
		//Mengecek kondisi tabel berhasil terbuat / gagal
		if (mysqli_query($conn, $sql)) {
			echo "Tabel relasi berhasil terbuat"."<br>";
		} else {
			echo "Error: ".$sql."<br>".mysqli_error($conn);
		}
	?>
</body>
</html>