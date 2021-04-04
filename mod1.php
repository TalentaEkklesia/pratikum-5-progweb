<!DOCTYPE html>
<html>
<head>
	<title>Variabel</title>
</head>
<body>
	<?php
	//$nilai1,2,3 adalah variabel untuk menampung nilai
	$nilai1 = 10;
	$nilai2 = 3;
	//$nilai3 disini digunakan untuk menampilkan hasil kalkulasi menggunakan rumus
	$nilai3 = 2*$nilai1+8*$nilai2;
	//echo berfungsi untuk menampilkan teks ke layar
	echo "nilai = ", $nilai3;
	//<br> berfungsi untuk memberi spasi enter
	echo "<br>";
	//$jumlah berfungsi menampung hasil dari kalkulasi $nilai1 dan $nilai2, sesuai dengan yang dikoding
	$jumlah = $nilai1+$nilai2;
	echo "hasil dari $nilai1 + $nilai2 adalah : $jumlah";
	echo "<br><br>";
	echo "\"Nama : Harun Al Rasyid\"<br>";
	echo "\"NPM : 19082010065\"<br>";
	?>
</body>
</html>