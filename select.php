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

	//Script query untuk select data
	$sql = "SELECT kode, negara, champion FROM liga";
	$result = mysqli_query($conn,$sql);

	//Menampilkan data 
	if (mysqli_num_rows($result)>0) {
		while ($row= mysqli_fetch_assoc($result)){
			echo "kode : ".$row["kode"]." - Negara: ".$row["negara"]." Juara Ke- ".$row["champion"]."<br>";
		}
	}
	else {
		echo "0 result";
	}

	//Script menutup koneksi
	mysqli_close($conn);
?>