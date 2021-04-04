<!DOCTYPE html>
<html>
<head>
	<title>Pemograman PHP dengan Array</title>
</head>
<body>
	<?php
	//penulisan array dapat dibuka seperti berikut
	$nama[] = "Harun";
	$nama[] = "Al";
	$nama[] = "Rasyid";
	//berfungsi untuk menampilkan array sesuai dengan urutan
	echo $nama[1] . $nama[2] . $nama[0];
	echo "<br>";

	//menghitung jumlah elemen array
	$jum_array = count($nama);
	//menampilkan jumlah array
	echo "jumlah elemen array = ".$jum_array;
	?>

</body>
</html>