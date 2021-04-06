<!DOCTYPE html>
<html>
<head>
	<title>Memasukkan/Insert Data</title>
</head>
<body>
	<!--Deklarasi Script PHP-->
	<?php  
		//Script query untuk insert data
		$sql = "INSERT INTO buku_tamu(ID_BT,NAMA,ALAMAT,TIPETAMU,TELP) VALUES ('1', 'Pradita Ramadhani Putri', 'Surabaya', 'VIP', '08212345678')";

		//Mengecek kondisi data berhasil dimasukkan / gagal
		if (mysqli_query($conn, $sql)) {
			echo "Data berhasil diinputkan"."<br>";}
		else {
			echo "Error : ".$sql."<br>".mysqli_error($conn);}
	?>

	<!--Tag pembuat tabel-->
	<table border="3">
		<tr>
			<td>ID_BT</td>
			<td>NAMA</td>
			<td>ALAMAT</td>
			<td>TIPE_TAMU</td>
			<td>TELP</td>
		</tr>

	<!--Deklarasi script php-->
	<?php
		//Script query untuk menampilkan data
		$sql="SELECT * FROM buku_tamu";
		$result=mysqli_query($conn,$sql);
		//Menampilkan data
		if (mysqli_num_rows($result)>0) {
			while ($tampil= mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td>".$tampil['ID_BT']."</td>";
				echo "<td>".$tampil['NAMA']."</td>";
				echo "<td>".$tampil['ALAMAT']."</td>";
				echo "<td>".$tampil['TIPETAMU']."</td>";
				echo "<td>".$tampil['TELP']."</td>";
				echo "</tr>";
			echo"</table>";
		}
	}
	?>
	</table>
</body>
</html>