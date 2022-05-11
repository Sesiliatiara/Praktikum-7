<?php
$servername = "localhost"; 
$username = "root"; 
$password = "";
$dbname = "mydb";

// Membuat Koneksi ke database
$conn = mysqli_connect($servername, $username, $password, $dbname); 

// Mengecek koneksi
if (!$conn) {
	die("Connection failed: ".mysqli_connect_error()); 
}
// Membuat tabel  buku tamu
$sql = "CREATE TABLE buku_tamu (ID_BT INT(10) PRIMARY KEY, 
NAMA VARCHAR(200) NOT NULL, EMAIL VARCHAR(50) NOT NULL,
ISI Text )";

if (mysqli_query($conn, $sql)) {
	echo "buku tamu created successfully"; 
} else {
	echo "Error creating buku tamu: ".mysqli_error($conn); 
}

mysqli_close($conn);
?>