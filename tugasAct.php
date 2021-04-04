<?php
//membuka dan menutup syntax php
$nama = $_GET['nama'];
$email = $_GET['email'];

if ($nama == "") {
	//echo penampil data di php
	echo '<meta http-equiv="refresh" content="1; url=http://localhost/praktikum5/redirectTugas.php">';
} elseif ($email == "") {
	echo '<meta http-equiv="refresh" content="1; url=http://localhost/praktikum5/redirectTugas.php">';
} else {
	echo "<center>Nama : ".$nama."</center><br>";
	echo "<center>Email : ".$email."</center><br>";
	//berfungsi mengatur zona waktu yg digunakan di php
date_default_timezone_set('Asia/Jakarta');
//date menampilkan data dan waktu
	echo "<center>Tanggal : ".date("d-F-Y, H:i:s a")."</center><br>";
	echo "<center>Tanggal Login : ".date("d-F-Y")."</center><br>";
	echo '<meta http-equiv="refresh" content="3; url=http://localhost/praktikum5/tugasBiodata.php">';
}
?>