<!DOCTYPE html>
<html>
<head>
	<title>Tanggalan</title>
</head>
<body>
	<?php
	//date deafult timezone berfungsi untuk mengeset timezone yang ingin ditampilkan
	date_default_timezone_set('Asia/Jakarta');
	//date berfungsi untuk merubah tipe formatting tanggal yang ingin kita tampilkan
	echo date("d-F-Y, H:i:s a");
	?>

</body>
</html>